<?php 

if(empty($_POST["accion"])){
    $_POST["accion"] = "General";
}

switch ($_POST["accion"]){
    case "consultarOfertas":
        ConsultarOfertas();
    break;
}


function ConsultarOfertas(){
    session_start();
    require "Conexion.php";
    mysqli_set_charset($con, "utf8");
    $idEmpresa = $_POST['idEmpresa'];

    $sql = "SELECT * FROM empresa e JOIN oferta o ON(e.NIT = o.NITempresa) JOIN usuario u ON(e.IDusuario = u.ID) WHERE e.NIT = '$idEmpresa'";
    if(!$result = mysqli_query($con,$sql)) die();

    $ofertas = array();

    while($row = $result->fetch_assoc()){
        array_push($ofertas,$row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;

}




















?>