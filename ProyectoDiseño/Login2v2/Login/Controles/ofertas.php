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
}


function AgregarOferta()
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

    while ($row = $result->fetch_assoc()) {

        if ($ContadorTarjetas == 0) {
            echo "<div class='row'>";
        }


        echo  " <div class='card mt-6 edit-tarjeta' style='width: 18rem;'>
                <div class='img-tarjeta'>
                <img src=" . $row["foto"] . " class='card-img-top img-tarjeta' alt='...'>
                </div>
                <div class='card-body'>
                    <h3 class='card-title fw-bold tamaño-fuente'>Cargo: " . $row["cargo"] . "</h3>
                    <p class='card-text'>descripcion: " . $row["descripcion"] . "</p>
                </div>
                <ul class=list-group list-group-flush'>
                    <li class='list-group-item'>Salario: " . $row["salario"] . "</li>
                    <li class='list-group-item'>Condiciones: " . $row["condicion"] . "</li>
                </ul>
                <button data-id=" . $row["IDoferta"] . "  onclick='BuscarOferta();' type='button' class='btnModal color-tarjeta-a' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    Ver mas
                </button>
            </div>";
        $ContadorTarjetas = $ContadorTarjetas + 1;
        if ($ContadorTarjetas == 4) {
            echo " </div>";
            $ContadorTarjetas = 0;
        }
    }
}

function BuscarOferta()
{
    require "Conexion.php";
    $IDoferta = $_POST['IDoferta'];    //'Juanita'; //
    //echo $idcliente;
    //$idcliente=2;

    $sql = "SELECT  * FROM oferta WHERE IDoferta ='$IDoferta'";

    if (!$result = mysqli_query($con, $sql)) die();


    while ($row = $result->fetch_assoc()) {
        echo " <div class='modal fade' id='exampleModal'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <img class='img-ver-oferta' src='https://upload.wikimedia.org/wikipedia/commons/4/4c/Olimpical.png' class='card-img-top' alt='...'>
                </div>
                <div class='modal-body'>
                    <h5>Nombre del cargo: " . $row["cargo"] . "</h5>
                    <h6>Vigencia de la oferta: " . $row["vigencia"] . "</h6>
                    <h6>Numero maximo de aplicantes: " . $row["vigencia"] . "</h6>
                    <h6>Descripcion del cargo: " . $row["vigencia"] . "</h6>
                    <h6>Sector principal: " . $row["vigencia"] . "</h6>
                    <h6>Tipo de contrato: " . $row["vigencia"] . "</h6>
                    <h6>Salario: " . $row["vigencia"] . "</h6>
                    <h6>Condiciones: " . $row["vigencia"] . "</h6>
                    <h6>Horario: " . $row["vigencia"] . "</h6>
                    <h6>Perfil del profesional:</h6>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                    <button type='button'data-id=" . $row["IDoferta"] . " onclick='ModificarOferta();' class='btn btn-primary color-boton-seleccionar-oferta btnModifiacr'>Modificar</button>
                    <button type='button'data-id=" . $row["IDoferta"] . " onclick='CancelarOferta();' class='btn btn-primary color-boton-seleccionar-oferta btnCancelar'>Cancelar</button>
                </div>
            </div>
        </div>
    </div>";
    }
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
