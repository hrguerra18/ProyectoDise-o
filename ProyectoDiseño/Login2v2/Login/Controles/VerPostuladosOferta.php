<?php 

if(empty($_POST['accion'])){
    $_POST['accion'] = "General";
}

switch($_POST['accion']){
    case "consultarPostuladosOferta":
        ConsultarPostuladosOferta();
    break;
    case "consultarEstado":
        ConsultarEstado();
    break;
    case "AceptarPostulado":
        AceptarPostulado();
    break;
}


function ConsultarPostuladosOferta(){
    session_start();
    require "Conexion.php";

    $idOferta = $_POST['idOfertaRecibida'];
    $estado = "En espera";
    $estadoAceptado = "Aceptado";

    $sql = "SELECT * FROM pro_ofert o JOIN profesional p ON(o.idProfesional = p.Identidad)JOIN usuario u ON(p.IDusuario = u.ID) where o.idOferta = '$idOferta' AND o.estadoProOfert = '$estado' OR o.estadoProOfert = '$estadoAceptado'";

    if(!$result = mysqli_query($con,$sql)) die();

    $profesionales = array();

    while($row = $result->fetch_assoc()){
        array_push($profesionales,$row);
    }

    $json_string = json_encode($profesionales);
    echo $json_string;

    

}

function ConsultarEstado(){
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

function AceptarPostulado(){
    session_start();
    require "Conexion.php";
    $Identidad = $_POST['Identidad'];
    $idOferta = $_POST['idOferta'];
    $estadoAceptado = "Aceptado";

    $sql = "UPDATE pro_ofert SET estadoProOfert = '$estadoAceptado' WHERE idProfesional = '$Identidad' AND idOferta = '$idOferta' ";
    
    if(mysqli_query($con,$sql)){
        $respuesta = array("mensaje"=> "Se acepto la postulacion");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }else{
        $respuesta = array("mensaje"=> "Error1");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }


}






















?>