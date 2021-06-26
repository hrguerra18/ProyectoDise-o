<?php 

if(empty($_POST["accion"])){
    $_POST["accion"] = "General";
}

switch ($_POST["accion"]){
    case "consultarOfertas":
        ConsultarOfertas();
    break;
    case "consultarEstado":
        ConsultarEstado();
    break;
    case "eliminarOferta" :
        EliminarOferta();
    break;
    case "validarVigencia" :
        ValidarVigencia();
    break;
    case "consultarTodasLasOfertas" :
        ConsultarTodasLasOfertas();
    break;
    case "consultarActivasOInactivas" :
        ConsultarActivasOInactivas();
    break;
}


function ConsultarOfertas(){
    session_start();
    require "Conexion.php";
    mysqli_set_charset($con, "utf8");
    $idEmpresa = $_POST['idEmpresa'];

    $sql = "SELECT * FROM empresa e JOIN oferta o ON(e.NIT = o.NITempresa) JOIN usuario u ON(e.IDusuario = u.ID) WHERE e.NIT = '$idEmpresa' ORDER BY o.IDoferta DESC";
    if(!$result = mysqli_query($con,$sql)) die();
    
    $ofertas = array();
    

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;

}

function ConsultarEstado(){
    session_start();
    require "Conexion.php";
    $idOferta = $_POST['idOferta'];
    $sql = "SELECT count(*) as conteo, estadoOferta FROM oferta WHERE IDoferta = '$idOferta'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $estado = $row['estadoOferta'];
    $conteo = $row['conteo'];

    if($conteo > 0){
        echo $estado;
    }
}

function EliminarOferta(){
    session_start();
    require "Conexion.php";
    $IDoferta = $_POST['IDoferta'];
    $estado = "Inactivo";
    $sql = "UPDATE  oferta SET estadoOferta = '$estado' WHERE IDoferta = '$IDoferta'";

    if (mysqli_query($con, $sql)) {

        $respuesta = array("mensaje"=>"Inactivo");
        $json_string = json_encode($respuesta);
        echo $json_string;
    } else {
        echo "Error: " . $sql;
        echo mysqli_error($con);
    }
}


function ValidarVigencia(){
    session_start();
    require "Conexion.php";
    $ofertas = json_decode($_POST['array'],true);
    $fechaHoy = $_POST['fechaHoy'];
    $Inactivo = "Inactivo";

    

    foreach($ofertas as $value){
        if($value['vigencia'] < $fechaHoy){
            $IDoferta = $value['IDoferta'];

            $sql = "UPDATE oferta SET estadoOferta = '$Inactivo' WHERE IDoferta = '$IDoferta'";
            if(mysqli_query($con,$sql)){
                echo " cambio estado ";
            }
        }else{
            echo " no le cambio el estado ";
        }
    }
}

function ConsultarTodasLasOfertas(){
    session_start();
    require "Conexion.php";
    

    $sql = "SELECT * FROM oferta ";
    if(!$result = mysqli_query($con,$sql)) die();
    
    $ofertas = array();
    

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;
}

function ConsultarActivasOInactivas(){
    session_start();
    require "Conexion.php";

    $idEmpresa = $_POST['idEmpresa'];
    $dato = $_POST['dato'];

    $sql = "SELECT * FROM empresa e JOIN oferta o ON(e.NIT = o.NITempresa) JOIN usuario u ON(e.IDusuario = u.ID) WHERE e.NIT = '$idEmpresa' AND o.estadoOferta = '$dato' ORDER BY o.IDoferta DESC";
    if(!$result = mysqli_query($con,$sql)) die();

    $ofertas = array();

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;
}




















?>