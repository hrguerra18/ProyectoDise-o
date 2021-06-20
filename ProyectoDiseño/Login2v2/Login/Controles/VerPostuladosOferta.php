<?php 

if(empty($_POST['accion'])){
    $_POST['accion'] = "General";
}

switch($_POST['accion']){
    case "consultarPostuladosOferta" :
        ConsultarPostuladosOferta();
}


function ConsultarPostuladosOferta(){
    session_start();
    require "Conexion.php";

    $idOferta = $_POST['idOfertaRecibida'];

    $sql = "SELECT * FROM pro_ofert o JOIN profesional p ON(o.idProfesional = p.Identidad)JOIN usuario u ON(p.IDusuario = u.ID) where o.idOferta = '$idOferta'";

    if(!$result = mysqli_query($con,$sql)) die();

    $profesionales = array();

    while($row = $result->fetch_assoc()){
        array_push($profesionales,$row);
    }

    $json_string = json_encode($profesionales);
    echo $json_string;

    

}























?>