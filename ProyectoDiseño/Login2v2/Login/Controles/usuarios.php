<?php

if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "BuscarUsuario":
        BuscarUsuario();
        break;
}

function CrearUsuario($correo, $contraseña, $tipo, $foto)
{
    include "Conexion.php";
    $Sql = "INSERT INTO usuario (ID,correo,contraseña,tipo,foto) VALUES (default,'$correo','$contraseña','$tipo','$foto')";
    if (mysqli_query($con, $Sql)) {
        $sql = "Select ID FROM usuario where correo = '$correo' and contraseña = '$contraseña' and tipo = '$tipo'  and foto = '$foto'";
        if (($result = mysqli_query($con, $sql)) != 0) {
            $row = mysqli_fetch_array($result);
            return $row['ID'];
        } else {
            echo "Error en usuario";
            return "";
        }
    } else {
        echo "Error en usuario";
        return "";
    }
}


function BuscarUsuario()
{
    include "Conexion.php";
    $username = mysqli_real_escape_string($con, $_POST['usuario']);
    $password = mysqli_real_escape_string($con, $_POST['contraseña']);

    $count = 0;

    if ($username != "" && $password != "") {

        $sql_query = "SELECT count(*) as numusu,ID,foto,tipo FROM usuario WHERE correo =' $username' AND contraseña='$password'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['numusu'];
        $tipo = $row['tipo'];
        $ID = $row['ID'];
        $foto = $row['foto'];

        if ($count > 0) {

            if ($tipo == "Empresa") {
                $sql = "SELECT * FROM empresa WHERE IDusuario = '$ID' ";
                $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $IDusuario = $row['NIT'];
            $nombre = $row['nombre'];
            } else {
                $sql = "SELECT * FROM profesional WHERE IDusuario = '$ID' ";
                $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $IDusuario = $row['identidad'];
            $nombre = $row['nombre'].' '. $row['apellido'];
            }
            
            $_SESSION['usuario'] = $nombre;
            $_SESSION['foto'] = $foto;
            $_SESSION['IDusuario'] = $IDusuario;
            $_SESSION['tipo'] = $tipo;
            $_SESSION['validar'] = true;

            $respuesta = array("mensaje" => "Datos Validos");
            $json_string = json_encode($respuesta);
            echo $json_string;
        } else {

            $_SESSION['validar'] = false;

            $respuesta = array("mensaje" => "Datos Invalidos");
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    }
}
