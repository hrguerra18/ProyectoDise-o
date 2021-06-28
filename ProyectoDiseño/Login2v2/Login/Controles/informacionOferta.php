<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "Modificar":
        ModificarOferta();
        break;
    case "BuscarOferta":
        BuscarOferta();
        break;
}

function BuscarOferta()
{
    require "Conexion.php";
    $idOferta = $_POST['idOfertaRecibida'];
    $Sql = "SELECT * FROM oferta WHERE IDoferta = '$idOferta'";
    mysqli_set_charset($con, "utf8"); //formato de datos utf8

    if (!$result = mysqli_query($con, $Sql)) die();
    $ofertas = array();

    while ($row = $result->fetch_assoc()) {
        array_push($ofertas, $row);
    }
    $json_string = json_encode($ofertas);
    echo $json_string;
}

// <p class='card-text'>descripcion: " . $row["descripcion"] . "</p>



function ModificarOferta()
{
    require "Conexion.php";
    $cargo = $_POST['Cargo'];
    $Vigencia = $_POST['vigencia'];
    $numeroAplicantes = $_POST['numeroAplicantes'];
    $descripcion = $_POST['descripcion'];
    $sector = $_POST['sector'];
    $tipoContrato = $_POST['tipoContrato'];
    $salario = $_POST['salario'];
    $horario = $_POST['horario'];
    $NITempresa = $_POST['NIT'];
    $condicion = $_POST['condiciones'];
    $IDoferta = $_POST['IDoferta'];
    $estado = $_POST['estado'];

    if ($NITempresa != "") {

        $sqlOferta = "UPDATE oferta SET cargo = '$cargo',vigencia = '$Vigencia',numeroAplicantes = '$numeroAplicantes',
        descripcion = '$descripcion',sector = '$sector',tipoContrato = '$tipoContrato',salario = '$salario',horario = '$horario',
        NITempresa = '$NITempresa',condicion = '$condicion', estadoOferta = '$estado' WHERE IDoferta = '$IDoferta'";

        if (mysqli_query($con, $sqlOferta)) {
            $respuesta = array("mensaje" => "Se modifico");
            $json_string = json_encode($respuesta);
            echo $json_string;
        } else {
            $respuesta = array("mensaje" => "Error" . mysqli_error($con));
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    } else {
        $respuesta = array("mensaje" => "Error NIT de la empresa vacio");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}
