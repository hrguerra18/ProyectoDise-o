<?php


function CrearUsuario($correo, $contraseña, $tipo, $foto)
{
    include "Conexion.php";
    $Sql = "INSERT INTO usuario (ID,correo,contraseña,tipo,foto) VALUES (default,'$correo','$contraseña','$tipo','$foto')";
    if (mysqli_query($con, $Sql)) {
        $sql = "Select ID FROM usuario where correo = '$correo' and contraseña = '$contraseña' and tipo = '$tipo'  and foto = '$foto'";
        if (($result = mysqli_query($con, $sql))) {
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


