<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "adicionar":
        AgregarOferta();
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

    if( $NITempresa != ""){
        
        $sqlOferta = "INSERT INTO oferta (ID,cargo,vigencia,numeroAplicantes,descripcion,sector,tipoContrato,salario,horario,NITempresa,condicion) 
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
    }else{
        $respuesta = array("mensaje" => "Error NIT de la empresa vacio");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}

function ConsultarOferta(){
    require "Conexion.php";
    $NITempresa = $_SESSION['IDusuario'];
    $Sql = "SELECT * FROM oferta WHERE NITempresa = '$NITempresa'";
}
?>