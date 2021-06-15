<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "general";
}
$_POST['accion'] = "modificar";
switch ($_POST['accion']) {
    case "modificar":
        ModificarDatosProfesional();
        break;
}


function ModificarDatosProfesional()
{
    session_start();
    require "Conexion.php";

    $identidad = $_POST['identidad'];
    $fechaNacimiento = $_POST['fechaNacimientoProfesional'];
    $nombreProfesional = $_POST['nombreProfesional'];
    $apellidoProfesional = $_POST['apellidoProfesional'];
    $sobreMiProfesional = $_POST['sobreMiProfesional'];
    $direccionProfesional = $_POST['direccionProfesional'];
    $departamentoProfesional = $_POST['departamentoProfesional'];
    $ciudadProfesional = $_POST['ciudadProfesional'];
    $telefonoProfesional = $_POST['telefonoProfesional'];

    $sql = "UPDATE profesional SET fechaNacimiento='$fechaNacimiento',nombre='$nombreProfesional',apellido='$apellidoProfesional',
    sobreMi='$sobreMiProfesional',direccion='$direccionProfesional',departamentoProfesional='$departamentoProfesional',
    ciudadProfesional='$ciudadProfesional',telefono='$telefonoProfesional' WHERE Identidad = '$identidad'";

    if (mysqli_query($con, $sql)) {
        $_SESSION['nombre'] = $nombreProfesional;
        $_SESSION['apellido'] = $apellidoProfesional;
        $_SESSION['direccion'] = $direccionProfesional;
        $_SESSION['telefono'] = $telefonoProfesional;
        $_SESSION['sobreMiProfesional'] = $sobreMiProfesional;
        $_SESSION['fechaNacimiento'] = $fechaNacimiento;
        $respuesta = array("mensaje" => "Se ha registrado los datos de manera correcta");
        $json_string = json_encode($respuesta);
        echo $json_string;
    } else {
        $respuesta = array("mensaje" => "Error" . mysqli_error($con));
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}
