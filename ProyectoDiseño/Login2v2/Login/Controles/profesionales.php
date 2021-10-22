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

    $validarDatos = ValidarRegistroProfesional($identidad,$foto,$nombre,$apellido,$direccion,$telefono,$correo,$contraseña);
    if($validarDatos[0]){
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
    }else{
        echo $validarDatos[1];
    }
    
}

function ValidarRegistroProfesional($identidad, $foto, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña) {
    $respuestaRegistroProfesional = [];
    if ($identidad != "") {
        if (strlen($identidad) == 10) {
            if (ValidarSoloNumeros($identidad)) {
                if ($foto != "") {
                    if (strlen($foto) > 0 && strlen($foto) <= 500) {
                        if ($nombre != "") {
                            if (strlen($nombre) > 0 && strlen($nombre) <= 30) {
                                if (ValidarCaracteresAlfabeticos($nombre)) {
                                    if ($apellido != "") {
                                        if (strlen($apellido) > 0 && strlen($apellido) <= 30) {
                                            if (ValidarCaracteresAlfabeticos($apellido)) {
                                                if ($direccion != "") {
                                                    if (strlen($direccion) > 0 && strlen($direccion) <= 100) {
                                                       if($telefono != ""){
                                                        if (strlen($telefono) == 10) {
                                                            if (ValidarSoloNumeros($telefono)) {
                                                                if($correo != ""){
                                                                    if(ValidarCorreo($correo)){
                                                                        if($contraseña != ""){
                                                                            if(strlen($contraseña) >= 6 && strlen($contraseña) <= 20){
                                                                                $respuestaRegistroProfesional = [true, ""];
                                                                            }else{
                                                                                $respuestaRegistroProfesional = [false, "La contraseña tiene que ser como minimo 6 caracteres y maximo 20"];
                                                                            }
                                                                        }else{
                                                                            $respuestaRegistroProfesional = [false, "La contraseña no puede estar vacia"];
                                                                        }
                                                                    }else{
                                                                        $respuestaRegistroProfesional = [false, "Verifique que el correo cumpla con el formato"];
                                                                    }
                                                                }else{
                                                                    $respuestaRegistroProfesional = [false, "El correo no puede estar vacio"];
                                                                }
                                                            } else {
                                                                $respuestaRegistroProfesional = [false, "El telefono solo puede tener numeros"];
                                                            }
                                                        } else {
                                                            $respuestaRegistroProfesional = [false, "El telefono tiene que ser de 10 digitos"];
                                                        }
                                                       }else{
                                                        $respuestaRegistroProfesional = [false, "El telefono no puede estar vacio"];
                                                       }
                                                    } else {
                                                        $respuestaRegistroProfesional = [false, "La direccion no puede contener mas de 100 caracteres"];
                                                    }
                                                } else {
                                                    $respuestaRegistroProfesional = [false, "La direccion no puede estar vacia"];
                                                }
                                            } else {
                                                $respuestaRegistroProfesional = [false, "El apellido no puede contener numeros"];
                                            }
                                        } else {
                                            $respuestaRegistroProfesional = [false, "El apellido no puede contener mas de 30 caracteres"];
                                        }
                                    } else {
                                        $respuestaRegistroProfesional = [false, "El apellido no puede estar vacio"];
                                    }
                                } else {
                                    $respuestaRegistroProfesional = [false, "El nombre no puede contener numeros"];
                                }
                            } else {
                                $respuestaRegistroProfesional = [false, "El nombre no puede contener mas de 30 caracteres"];
                            }
                        } else {
                            $respuestaRegistroProfesional = [false, "El nombre no puede estar vacio"];
                        }
                    } else {
                        $respuestaRegistroProfesional = [false, "El campo de la foto no puede ser mayor a 500 caracteres"];
                    }

                } else {
                    $respuestaRegistroProfesional = [false, "El campo de la foto no puede estar vacio"];
                }

            } else {
                $respuestaRegistroProfesional = [false, "El campo identidad solo puede contener numeros"];
            }
        } else {
            $respuestaRegistroProfesional = [false, "El campo identidad tiene que ser de 10 digitos"];
        }
    } else {
        $respuestaRegistroProfesional = [false, "El campo identidad no puede estar vacio"];
    }
    return $respuestaRegistroProfesional;
}

//funciones de validaciones

function ContarDigitosNumero($numero) {
    return strlen(strval($numero));
}

function ValidarCorreo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

function ValidarCaracteresAlfabeticos($cadena) {
    if (ctype_alpha($cadena)) {
        return true;
     }else{
         return false;
     }
}

function ValidarSoloNumeros($cadena) {
    if (is_numeric($cadena)) {
        return true;
    } else {
        return false;
    }
}


?>