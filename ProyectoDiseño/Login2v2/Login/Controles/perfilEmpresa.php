<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "consultarperfil":
        ConsultarPerfil();
        break;
    case "modificar":
        ModificarEmpresa();
        break;
}

function ConsultarPerfil()
{
    require "Conexion.php";
    $NIT = $_POST['NIT'];
    $sql = "SELECT * FROM empresa WHERE NIT = '$NIT'";

    if (!$result = mysqli_query($con, $sql)) die();

    $empresas = array(); //creamos un array

    while ($row = $result->fetch_assoc()) {
        array_push($empresas, $row);
    }

    $json_string = json_encode($empresas);
    echo $json_string;
}

function  ModificarEmpresa()
{
    require "Conexion.php";
    $NIT = $_POST['NIT'];
    $nombre = $_POST['nombre'];
    $servicio = $_POST['servicio'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $pagina =  $_POST['pagina'];
    $cantidadEmpleado =  $_POST['CantidadEmpleado'];
    $descripcion =  $_POST['descripcion'];
    $ciudad =  $_POST['ciudad'];


    $sql = "UPDATE empresa SET nombre = '$nombre', servicio = '$servicio', direccion = '$direccion', telefono = '$telefono', pagina = '$pagina',
    cantidadEmpleado = '$cantidadEmpleado', descripcion = '$descripcion', ciudad = '$ciudad' WHERE NIT = '$NIT'";

    if (mysqli_query($con, $sql)) {
        echo "Cliente Modificado";
    } else {
        echo "Error: " . $sql;
        echo mysqli_error($con);
    }
}
