<?php 

if(empty($_POST["accion"])){
    $_POST["accion"] = "General";
}

switch ($_POST["accion"]){
    case "cosultarProfesionalesIndex":
        CosultarProfesionalesIndex();
    break;
}


function CosultarProfesionalesIndex(){
    session_start();
    require "Conexion.php";

    $sql = "SELECT * FROM profesional p JOIN usuario u ON(p.IDusuario = u.ID)";

    if(!$result = mysqli_query($con,$sql)) die();
    $profesionales = array();

    while($row = $result -> fetch_assoc()){
        array_push($profesionales,$row);
    }

    $json_string = json_encode($profesionales);
    echo $json_string;

}




?>