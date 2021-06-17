<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "adicionar":
        AgregarOferta();
        break;
    case "BuscarOferta":
        BuscarOferta();
        break;
    case "Modificar":
        ModificarOferta();
        break;
}


function AgregarOferta()
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

    if ($NITempresa != "") {

        $sqlOferta = "INSERT INTO oferta (IDoferta,cargo,vigencia,numeroAplicantes,descripcion,sector,tipoContrato,salario,horario,NITempresa,condicion) 
        VALUES (default,'$cargo','$Vigencia','$numeroAplicantes','$descripcion','$sector','$tipoContrato','$salario','$horario','$NITempresa','$condicion')";
        if (mysqli_query($con, $sqlOferta)) {
            $respuesta = array("mensaje" => "Se ha registrado los datos de manera correcta");
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

function ConsultarOferta($NITempresa)
{
    require "Conexion.php";
    $Sql = "SELECT * FROM oferta o JOIN empresa e ON (o.NITempresa = e.NIT) JOIN usuario u ON e.IDusuario = u.ID WHERE NITempresa = '$NITempresa'";
    $ContadorTarjetas = 0;
    mysqli_set_charset($con, "utf8"); //formato de datos utf8

    if (!$result = mysqli_query($con, $Sql)) die();
    $Sql = "SELECT count(*) as conteo FROM oferta o JOIN empresa e ON (o.NITempresa = e.NIT) JOIN usuario u ON e.IDusuario = u.ID WHERE NITempresa = '$NITempresa'";
    $resultConteo = mysqli_query($con, $Sql);
    $rowConteo = mysqli_fetch_array($resultConteo);
    $contadorOfertas = 0;
    while ($row = $result->fetch_assoc()) {

        if ($ContadorTarjetas == 0) {
            echo "<div class='row'>";
        }


        echo  " <div class='card mt-6 edit-tarjeta' style='width: 18rem;'>
                <div class='img-tarjeta'>
                <button class='activo'>Activo</button>
                <img src=" . $row["foto"] . " class='card-img-top img-tarjeta' alt='...'>
                </div>
                <div class='card-body'>
                    <h3 class='card-title fw-bold tamaño-fuente'>Cargo: " . $row["cargo"] . "</h3>
                    <h3 class='card-title fw-bold tamaño-fuente'>descirpcion: " . $row["descripcion"] . "</h3>
                </div>
                <ul class=list-group list-group-flush'>
                    <li class='list-group-item'>Salario: " . $row["salario"] . "</li>
                    <li class='list-group-item'>Condiciones: " . $row["condicion"] . "</li>
                </ul>
                <button data-id=" . $row["IDoferta"] . "  onclick='BuscarOferta();' type='button' class='btnModal color-tarjeta-a' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    Ver mas
                </button>
            </div>";
        $contadorOfertas = $contadorOfertas + 1;
        $ContadorTarjetas = $ContadorTarjetas + 1;
        if ($ContadorTarjetas == 4 || $contadorOfertas ==  $rowConteo['conteo']) {
            echo " </div>";
            $ContadorTarjetas = 0;
        }
    }
}

 // <p class='card-text'>descripcion: " . $row["descripcion"] . "</p>

function BuscarOferta()
{
    require "Conexion.php";
    $IDoferta = $_POST['IDoferta'];
    $sql = "SELECT  * FROM oferta WHERE IDoferta ='$IDoferta'";

    if (!$result = mysqli_query($con, $sql)) die();

    $ofertas = array();

    while ($row = $result->fetch_assoc()) {
        array_push($ofertas, $row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;
}

function ModificarOferta()
{
    require "Conexion.php";
    $cargo = $_POST['Cargo'];
    $Vigencia = $_POST['Vigencia'];
    $numeroAplicantes = $_POST['numeroAplicantes'];
    $descripcion = $_POST['descripcion'];
    $sector = $_POST['sector'];
    $tipoContrato = $_POST['tipoContrato'];
    $salario = $_POST['salario'];
    $horario = $_POST['horario'];
    $NITempresa = $_POST['NIT'];
    $condicion = $_POST['condicion'];
    $IDoferta = $_POST['IDoferta'];

    // $cargo = "Asistente";
    // $Vigencia ="22-07-2021";
    // $numeroAplicantes = "49";
    // $descripcion = "Ayudar al jefe";
    // $sector = "Logistica";
    // $tipoContrato = "Tiempo Completo";
    // $salario ="4000000";
    // $horario = "Intensivo";
    // $NITempresa = "999999999999";
    // $condicion = "1. un año de experiencia 2. tecnico en gerencias";
    // $IDoferta = "1";
    if ($NITempresa != "") {

        $sqlOferta = "UPDATE oferta SET cargo = '$cargo',vigencia = ' $Vigencia',numeroAplicantes = '$numeroAplicantes',
        descripcion = '$descripcion',sector = '$sector',tipoContrato = '$tipoContrato',salario = '$salario',horario = '$horario',
        NITempresa = '$NITempresa',condicion = '$condicion' WHERE IDoferta = '$IDoferta'";

        if (mysqli_query($con, $sqlOferta)) {
            $respuesta = array("mensaje" => "Se ha registrado los datos de manera correcta");
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
