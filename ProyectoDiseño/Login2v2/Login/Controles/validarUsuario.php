<?php
include "Conexion.php";
session_start();
//header('Location: index.php'); 

//Escapa los caracteres especiales de una cadena para usarla 
//en una sentencia SQL, tomando en cuenta el conjunto de 
//caracteres actual de la conexión
//Los caracteres codificados son NUL (ASCII 0), \n, \r, \, ', ", y Control-Z.

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);



$count = 0;

if ($username != "" && $password != "") {

    $sql_query = "select count(*) as numusu,ID,foto,tipo from usuario where correo ='" . $username . "' and contraseña='" . $password . "'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['numusu'];
    $ID = $row['ID'];
    $foto = $row['foto'];
    $tipo =  $row['tipo'];


    if ($count > 0) {

        if ($tipo == "Empresa") {
            ConsultarInformacionEmpresa($ID);
        } else {
            ConsultarInformacionProfesional($ID);
        }

        $_SESSION['foto'] = $foto;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['validar'] = true;


        $json_string = json_encode($_SESSION);
        echo $json_string;
    } else {
        session_destroy();
        $_SESSION['validar'] = false;
    }
}

function ConsultarInformacionEmpresa($ID)
{
    include "Conexion.php";
    $sql = "SELECT * FROM empresa WHERE IDusuario = '$ID'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $nombre =  $row['nombre'];
    $_SESSION['IDusuario'] = $row['NIT'];
    $_SESSION['usuario'] = $nombre;
    $_SESSION['servicio'] = $row['servicio'];
    $_SESSION['direccion'] = $row['direccion'];
    $_SESSION['telefono'] = $row['telefono'];
    $_SESSION['pagina'] = $row['pagina'];
    $_SESSION['cantidadEmpleado'] = $row['cantidadEmpleado'];
    $_SESSION['descripcion'] = $row['descripcion'];
    $_SESSION['ciudad'] = $row['ciudad'];
    $_SESSION['correo'] = $row['correo'];
}

function ConsultarInformacionProfesional($ID)
{
    include "Conexion.php";
    $sql = "SELECT * FROM profesional WHERE IDusuario = '$ID'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $_SESSION['IDusuario'] = $row['Identidad'];
    $_SESSION['usuario'] = $row['nombre'] . ' ' . $row['apellido'];
    $_SESSION['direccion'] = $row['direccion'];
    $_SESSION['telefono'] = $row['telefono'];
    $_SESSION['correo'] = $row['correo'];
}
