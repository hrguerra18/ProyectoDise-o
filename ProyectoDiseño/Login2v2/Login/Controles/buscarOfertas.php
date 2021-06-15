<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}


// $_POST['accion'] = "buscar";
switch ($_POST['accion']) {

    case "buscar":
        BuscarOfertas();
    break;
    case "buscarInfoEmpresa":
        BuscarInfoEmpresa();
    break;
}

function BuscarOfertas()
{
    require "Conexion.php";
    $buscarOferta = $_POST['filtroOferta'];
    mysqli_set_charset($con, "utf8");

    // $buscarOferta = 'ing';

    
    $sql = "SELECT o.IDoferta,o.cargo,o.vigencia,o.numeroAplicantes,o.descripcion,o.sector,o.tipoContrato,o.salario,o.horario,
    o.NITempresa, o.condicion,u.foto,e.nombre FROM oferta o JOIN empresa e ON(o.NITempresa = e.NIT) JOIN usuario u ON(e.IDusuario = u.ID)
     WHERE o.cargo LIKE '%$buscarOferta%'";

    if (!$result = mysqli_query($con, $sql)) die();


    $tarjeta = array();

    while ($row = $result->fetch_assoc()) {

        array_push($tarjeta, $row);
    }
    $json = json_encode($tarjeta);
    echo $json;
}

function BuscarInfoEmpresa(){
    session_start();
    require "Conexion.php";
    $NITempresa = $_POST['NITempresa'];

    $sql = "SELECT count(*) as numusu,e.nombre,u.foto,e.telefono,e.direccion FROM empresa e JOIN usuario u ON(e.IDusuario = u.ID) WHERE NIT='$NITempresa'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $nombre = $row['nombre'];
    $foto = $row['foto'];
    $telefono = $row['telefono'];
    $direccion = $row['direccion'];
    $count = $row['numusu'];

    if ($count > 0) {
        $_SESSION['nombreMostrarInformacion']= $nombre;
        $_SESSION['fotoMostrarInformacion']= $foto;
        $_SESSION['telefonoMostrarInformacion']= $telefono;
        $_SESSION['direccionMostrarInformacion']= $direccion;
        $_SESSION['validarr'] = true;
        $json_string = json_encode($_SESSION);
        echo $json_string;
    } else {
        $respuesta = array("mensaje" => "Error" . mysqli_error($con));
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}

