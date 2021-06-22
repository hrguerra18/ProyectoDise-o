<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}


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

    
    $sql = "SELECT o.IDoferta,o.cargo,o.vigencia,o.numeroAplicantes,o.descripcion,o.sector,o.tipoContrato,o.salario,o.horario,
    o.NITempresa, o.condicion,u.foto,e.nombre FROM oferta o JOIN empresa e ON(o.NITempresa = e.NIT) JOIN usuario u ON(e.IDusuario = u.ID)
     WHERE o.cargo LIKE '%$buscarOferta%'";

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

    $sql = "SELECT count(*) as numusu,e.nombre,u.foto,e.telefono,e.direccion FROM empresa e JOIN usuario u ON(e.IDusuario = u.ID) WHERE NIT='$NITempresa'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $nombre = $row['nombre'];
    $foto = $row['foto'];
    $telefono = $row['telefono'];
    $direccion = $row['direccion'];
    $count = $row['numusu'];

    if ($count > 0) {
        $_SESSION['nombreMostrarInformacion']= $nombre;
        $_SESSION['fotoMostrarInformacion']= $foto;
        $_SESSION['telefonoMostrarInformacion']= $telefono;
        $_SESSION['direccionMostrarInformacion']= $direccion;
        $_SESSION['validarr'] = true;
        $json_string = json_encode($_SESSION);
        echo $json_string;
    } else {
        $respuesta = array("mensaje" => "Error" . mysqli_error($con));
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}


function RegistrarPostulacion(){
    session_start();
    require "Conexion.php";

    $IDoferta = $_POST['IDoferta'];
    $IdEmpresaOProfesional = $_POST['IdEmpresaOProfesional'];
    $estadoProOfert = "Activo";

    if($IDoferta != "" && $IdEmpresaOProfesional != ""){
        $sql = "INSERT INTO pro_ofert (idProOfert,idProfesional,idOferta,estadoProOfert) VALUES (default,'$IdEmpresaOProfesional','$IDoferta','$estadoProOfert')";

        if(mysqli_query($con,$sql)){
            $respuesta = array("mensaje"=> "Se ha registrado correctamente la postulacion a la oferta");
            $json_string = json_encode($respuesta);
            echo $json_string;
        }else{
            $respuesta = array("mensaje"=> "Error" . mysqli_error($con));
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

    $sql = "SELECT * FROM oferta";

    if(!$result = mysqli_query($con,$sql)) die();

    $ofertas = array();

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;

}

