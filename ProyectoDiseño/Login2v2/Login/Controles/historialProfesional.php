<?php

if(empty($_POST['accion'])){
    $_POST['accion'] = "General";
}


switch($_POST['accion']){
    case "consultarOfertas" :
        ConsultarOfertasALasQueMePostule();

    break;
    case "eliminarPostulacion" :
        EliminarPostulacion();

    break;
    case "consultarEstado" :
        ConsultarEstado();

    break;
}

function ConsultarOfertasALasQueMePostule(){
    session_start();
    require "Conexion.php";

    $idProfesional = $_POST['idProfesional'];

    $sql = "SELECT * FROM pro_ofert pf JOIN oferta o ON(pf.idOferta=o.IDoferta) JOIN empresa e ON(e.NIT = o.NITempresa) 
    JOIN usuario u ON(e.IDusuario = u.ID) where idProfesional = '$idProfesional'";
    if(!$result = mysqli_query($con,$sql)) die();

    $ofertas = array();

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;
}

function EliminarPostulacion(){
    session_start();
    require "Conexion.php";
    $idOferta = $_POST['idOferta'];
    $idProfesional = $_POST['idProfesional'];
    $estado = "Inactivo";
    $sql = "UPDATE  pro_ofert SET estadoProOfert = '$estado' WHERE idOferta = '$idOferta' AND idProfesional = '$idProfesional'";

    if (mysqli_query($con, $sql)) {

        $respuesta = array("mensaje"=>"Inactivo");
        $json_string = json_encode($respuesta);
        echo $json_string;
    } else {
        echo "Error: " . $sql;
        echo mysqli_error($con);
    }
}

function  ConsultarEstado(){
    session_start();
    require "Conexion.php";
    $idOferta = $_POST['idOferta'];
    $idProfesional = $_POST['idProfesional'];
    $sql = "SELECT count(*) as conteo, estadoProOfert FROM pro_ofert WHERE idOferta = '$idOferta' AND idProfesional = '$idProfesional'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $estado = $row['estadoProOfert'];
    $conteo = $row['conteo'];

    if($conteo > 0){
        echo $estado;
    }

}

























?>