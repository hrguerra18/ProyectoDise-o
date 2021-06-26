<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "general";
}
// $_POST['accion'] = "modificar";
switch ($_POST['accion']) {
    case "modificar":
        ModificarDatosProfesional();
        break;
    case "consultarperfil":
            ConsultarPerfil();
     break;
//      case "subirArchivo":
//         SubirArchivo();
//  break;
}


function ModificarDatosProfesional()
{
    session_start();
    require "Conexion.php";

    $identidad = $_POST['identidad'];
    $carreraProfesional = $_POST['carreraProfesional'];
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
    ciudadProfesional='$ciudadProfesional',telefono='$telefonoProfesional',carrera='$carreraProfesional' WHERE Identidad = '$identidad'";

    if (mysqli_query($con, $sql)) {
        $resultado = array("mensaje"=> "Se modifico correctamente");
        $json_string = json_encode($resultado);
        echo $json_string;
    } else {
        echo "Error: " . $sql;
        echo mysqli_error($con);
    }
}

function ConsultarPerfil(){
    session_start();
    require "Conexion.php";
    $identidad = $_POST['identidad'];
    $sql = "SELECT * FROM profesional WHERE Identidad = '$identidad'";

    if (!$result = mysqli_query($con, $sql)) die();

    $profesionales = array(); //creamos un array

    while ($row = $result->fetch_assoc()) {
        array_push($profesionales, $row);
    }

    $json_string = json_encode($profesionales);
    echo $json_string;
}

// function SubirArchivo(){
//     session_start();
//     require "Conexion.php";
//     $archivo2 = $_POST['archivo'];
//     $archivo = (isset($_FILES['archivo'])) ? $_FILES['archivo'] : null;
//     if ($archivo) {
//        $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
//        $extension = strtolower($extension);
//        $extension_correcta = ($extension == 'jpg' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'png');
//        if ($extension_correcta) {
//           $ruta_destino_archivo = "Controles/HojasDeVidas/{$archivo['name']}";
//           $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
//        }
//     }
// }
