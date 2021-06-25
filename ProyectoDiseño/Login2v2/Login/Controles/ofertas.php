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
    case "consultarOfertas":
        ConsultarOferta();
     break;
     case "eliminarOferta":
        EliminarOferta();
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
    $estadoOferta = "Activo";
    $fechaActual = $_POST['fechaHoy'];

    if ($NITempresa != "") {

        $sqlOferta = "INSERT INTO oferta (IDoferta,cargo,vigencia,numeroAplicantes,descripcion,sector,tipoContrato,salario,horario,NITempresa,condicion,estadoOferta,fechaOfertaCreada) 
        VALUES (default,'$cargo','$Vigencia','$numeroAplicantes','$descripcion','$sector','$tipoContrato','$salario','$horario','$NITempresa','$condicion','$estadoOferta','$fechaActual')";
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

function ConsultarOferta()
{
    require "Conexion.php";
    $nitEmpresa = $_POST['nitEmpresa'];
    $Sql = "SELECT * FROM oferta o JOIN empresa e ON (o.NITempresa = e.NIT) JOIN usuario u ON e.IDusuario = u.ID WHERE NITempresa = '$nitEmpresa' ORDER BY o.IDoferta DESC";

    if (!$result = mysqli_query($con, $Sql)) die();

    $oferta = array();
    
    while ($row = $result->fetch_assoc()) {
        array_push($oferta,$row);
    }

    $json_string = json_encode($oferta);
    echo $json_string;
}



function BuscarOferta()
{
    require "Conexion.php";
    $IDoferta = $_POST['IDoferta'];
    $sql = "SELECT  * FROM oferta WHERE IDoferta ='$IDoferta'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    
    $_SESSION['IDoferta'] =  $IDoferta;
    $_SESSION['Cargo'] = $row['cargo'];
    $_SESSION['Vigencia'] = $row['vigencia'];
    $_SESSION['numeroAplicantes'] = $row['numeroAplicantes'];
    $_SESSION['descripcion'] = $row['descripcion'];
    $_SESSION['sector'] = $row['sector'];
    $_SESSION['tipoContrato'] = $row['tipoContrato'];
    $_SESSION['salario'] = $row['salario'];
    $_SESSION['horario'] = $row['horario'];
    $_SESSION['condicion'] = $row['condicion'];
    
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

function EliminarOferta(){
    require "Conexion.php";
    $IDoferta = $_POST['IDoferta'];
   
    if ($IDoferta != "") {

        $sqlOferta = "DELETE FROM oferta WHERE IDoferta = '$IDoferta'";

        if (mysqli_query($con, $sqlOferta)) {
            $respuesta = array("mensaje" => "Se elimino correctamente");
            $json_string = json_encode($respuesta);
            echo $json_string;
        } else {
            $respuesta = array("mensaje" => "Error" . mysqli_error($con));
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    } else {
        $respuesta = array("mensaje" => "Error IDOFERTA vacio");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}
