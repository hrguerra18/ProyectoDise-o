<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "consultarProfesional":
        ConsultarProfesional();
        break;
    
}

function ConsultarProfesional(){
    session_start();
    require "Conexion.php";
    $Identidad = $_POST['Identidad'];
    $Sql = "SELECT * FROM profesional p JOIN usuario u ON(p.IDusuario = u.ID) WHERE Identidad = '$Identidad'";
    mysqli_set_charset($con, "utf8"); //formato de datos utf8

    if (!$result = mysqli_query($con, $Sql)) die();
    $profesional = array();

    while ($row = $result->fetch_assoc()) {
        array_push($profesional, $row);
    }
    $json_string = json_encode($profesional);
    echo $json_string;
}



?>