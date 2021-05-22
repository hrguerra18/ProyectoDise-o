<?php

if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {

    case "adicionar":
        AgregarProfesional();
        break;
    default:
    AgregarProfesional();
    break;
}


function AgregarProfesional()
{
    
    require "Conexion.php";
    require "usuarios.php";
    
    $identidad = $_POST['identidad'];
    $foto = $_POST['foto'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $IDUsuario = CrearUsuario($correo,$contraseña,"Profesional",$foto);

    if( $IDUsuario != ""){
        
        $sqlProfesional = "INSERT INTO profesional (Identidad,nombre,apellido,direccion,telefono,correo,IDusuario) 
        VALUES ('$identidad','$nombre','$apellido','$direccion','$telefono','$correo','$IDUsuario')";
        if (mysqli_query($con, $sqlProfesional)) {
            $respuesta = array("mensaje" => "Se ha registrado los datos de manera correcta");
            $json_string = json_encode($respuesta);
            echo $json_string;
        } else {
            $respuesta = array("mensaje" => "Error" . mysqli_error($con));
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    }else{
       $respuesta = array("mensaje" => "Error ID del usuario vacio");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
}

?>