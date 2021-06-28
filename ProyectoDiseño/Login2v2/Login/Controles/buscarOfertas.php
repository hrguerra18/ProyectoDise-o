<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

// $_POST['accion'] = "registrarPostulacion";
switch ($_POST['accion']) {

    case "buscar":
        BuscarOfertas();
    break;
    case "buscarInfoEmpresa":
        BuscarInfoEmpresa();
    break;
    case "registrarPostulacion":
        RegistrarPostulacion();
    break;
    case "NoPermitirDobleRegistro":
        NoPermitirDobleRegistro();
    break;
    case "ConsultarTodasLasOfertas":
        ConsultarTodasLasOfertas();
    break;
}

function BuscarOfertas()
{
    require "Conexion.php";
    $buscarOferta = $_POST['filtroOferta'];
    mysqli_set_charset($con, "utf8");

    // $buscarOferta = 'ing';
    $estadoOferta = "Activo";
    
    $sql = "SELECT o.IDoferta,o.cargo,o.vigencia,o.numeroAplicantes,o.descripcion,o.sector,o.tipoContrato,o.salario,o.horario,
    o.NITempresa, o.condicion,u.foto,e.nombre FROM oferta o JOIN empresa e ON(o.NITempresa = e.NIT) JOIN usuario u ON(e.IDusuario = u.ID)
     WHERE o.cargo LIKE '%$buscarOferta%' AND o.estadoOferta='$estadoOferta'";

    if (!$result = mysqli_query($con, $sql)) die();


    $tarjeta = array();

    while ($row = $result->fetch_assoc()) {

        array_push($tarjeta, $row);
    }
    $json = json_encode($tarjeta);
    echo $json;
}

function BuscarInfoEmpresa(){
    session_start();
    require "Conexion.php";
    $NITempresa = $_POST['NITempresa'];

    $sql = "SELECT * FROM empresa e JOIN usuario u ON(e.IDusuario = u.ID) WHERE NIT='$NITempresa'";
   
    if (!$result = mysqli_query($con, $sql)) die();
    $empresa = array();

    while ($row = $result->fetch_assoc()) {
        array_push($empresa, $row);
    }
    $json_string = json_encode($empresa);
    echo $json_string;

    
}


function RegistrarPostulacion(){
    session_start();
    require "Conexion.php";

    $IDoferta = $_POST['IDoferta'];
    $IdEmpresaOProfesional = $_POST['IdEmpresaOProfesional'];
    $estadoProOfert = "Activo";
    // $IDoferta = "31";
    // $IdEmpresaOProfesional = "2341";
    // $estadoProOfert = "Activo";
    

    $cantidadPostulados = ContarCuantosPostuladosTieneLaOferta($IDoferta);
    $cantidadDeAplicantes = CantidadDeAplicantes($IDoferta);
    
    if($IDoferta != "" && $IdEmpresaOProfesional != ""){
        if($cantidadDeAplicantes > $cantidadPostulados){
            $sql = "INSERT INTO pro_ofert (idProOfert,idProfesional,idOferta,estadoProOfert) VALUES (default,'$IdEmpresaOProfesional','$IDoferta','$estadoProOfert')";
    
            if(mysqli_query($con,$sql)){
                $cantidadPostuladosValidarUltimo = ContarCuantosPostuladosTieneLaOferta($IDoferta);
                if($cantidadDeAplicantes == $cantidadPostuladosValidarUltimo){
                    CambiarEstadoOfertaInactivo($IDoferta);
                }
                $respuesta = array("mensaje"=> "Se ha registrado");
                $json_string = json_encode($respuesta);
                echo $json_string;
            }else{
                $respuesta = array("mensaje"=> "Error" . mysqli_error($con));
                $json_string = json_encode($respuesta);
                echo $json_string;
            }
        }else{
            $respuesta = array("mensaje" => "La oferta ya tiene su capacidad llena");
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    }else{
        $respuesta = array("mensaje"=> "Error, campos vacios");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }

    

    
}

function NoPermitirDobleRegistro(){
    session_start();
    require "Conexion.php";

    $IDoferta = $_POST['IDoferta'];
    $IdEmpresaOProfesional = $_POST['IdEmpresaOProfesional'];

    if($IDoferta != "" && $IdEmpresaOProfesional != ""){
        $sql = "SELECT count(*) AS cantidad,idProOfert,idProfesional,idOferta FROM pro_ofert WHERE idProfesional = '$IdEmpresaOProfesional'AND idOferta = '$IDoferta'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $cantidad = $row['cantidad'];

        if($cantidad == 0){
            $respuesta = array("mensaje"=> true);
            $json_string = json_encode($respuesta);
            echo $json_string;
        }else{
            $respuesta = array("mensaje"=> false);
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    }else{
        $respuesta = array("mensaje"=> "Error, campos vacios");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }

}


function ConsultarTodasLasOfertas(){

    session_start();
    require "Conexion.php";
    $estado = "Activo";
    $sql = "SELECT o.IDoferta,o.cargo,o.vigencia,o.numeroAplicantes,o.descripcion,o.sector,o.tipoContrato,o.salario,o.horario,
     o.NITempresa, o.condicion,u.foto,e.nombre FROM oferta o JOIN empresa e ON(o.NITempresa = e.NIT) JOIN usuario u ON(e.IDusuario = u.ID)
      WHERE o.estadoOferta = '$estado' ORDER BY o.IDoferta DESC ";

    if(!$result = mysqli_query($con,$sql)) die();

    $ofertas = array();

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;

}

function ContarCuantosPostuladosTieneLaOferta($IDoferta){
   
    require "Conexion.php";
    $estado = "Activo";
    $sql = "SELECT count(*) as contador FROM pro_ofert WHERE idOferta = '$IDoferta' AND estadoProOfert ='$estado'" ;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $contador = $row['contador'];
    
    return $contador;
   
}


function CantidadDeAplicantes($IDoferta){
    
    require "Conexion.php";

    $sql = "SELECT numeroAplicantes  FROM oferta WHERE IDoferta = '$IDoferta'" ;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $cantidadAplicantes = $row['numeroAplicantes'];
    
    return $cantidadAplicantes;
}

function CambiarEstadoOfertaInactivo($IDoferta){
    
    require "Conexion.php";
    $cambiarEstadoOferta = "Inactivo";
    $sql = "UPDATE oferta SET estadoOferta ='$cambiarEstadoOferta' WHERE IDoferta = '$IDoferta'";
    
    mysqli_query($con,$sql);
        
    
}