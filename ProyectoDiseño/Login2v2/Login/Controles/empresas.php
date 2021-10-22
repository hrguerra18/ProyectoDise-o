<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

switch ($_POST['accion']) {
    case "adicionar":
        AgregarEmpresa();
     break;
    case "buscarLegabilidad":
        BuscarLegabilidad();
     break;
     case "existenciaCorreo":
        ExistenciaCorreo();
     break;
}

function AgregarEmpresa()
{
    require "Conexion.php";
    require "usuarios.php";
    $NIT = $_POST['NIT'];
    $foto = $_POST['foto'];
    $nombre = $_POST['nombre'];
    $servicio = $_POST['servicio'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $validarDatos = ValidarRegistroEmpresa($nombre, $foto, $NIT, $servicio, $direccion, $telefono, $correo, $contraseña);
    if($validarDatos[0]){
    $IDUsuario = CrearUsuario($correo, $contraseña, "Empresa", $foto);
      if ($IDUsuario != "") {
        $sqlEmpresa = "INSERT INTO empresa (NIT,nombre,servicio,direccion,telefono,correo,IDusuario) 
        VALUES ('$NIT','$nombre','$servicio','$direccion','$telefono','$correo','$IDUsuario')";
        if (mysqli_query($con, $sqlEmpresa)) {
            $respuesta = array("mensaje" => "Se ha registrado los datos de manera correcta");
            $json_string = json_encode($respuesta);
            echo $json_string;
        } else {
            $respuesta = array("mensaje" => "Error" . mysqli_error($con));
            $json_string = json_encode($respuesta);
            echo $json_string;
        }
    } else {
        $respuesta = array("mensaje" => "Error ID del usuario vacio");
        $json_string = json_encode($respuesta);
        echo $json_string;
    }
    }else{
      echo($validarDatos[1]);
    }
}


function BuscarLegabilidad(){
    require "Conexion.php";
    $NIT = $_POST['NIT'];
      $sqlEmpresa = "SELECT count(*) as contador FROM camaracomercio WHERE nitEmpresa = '$NIT'";
      $result = mysqli_query($con, $sqlEmpresa);
      $row = mysqli_fetch_array($result);
      $contador = $row['contador'];
      if($contador == 1){
        $respuesta = array("mensaje"=>true);
        $json_string = json_encode($respuesta);
        echo $json_string;
      }
      else{
        $respuesta = array("mensaje"=>false);
        $json_string = json_encode($respuesta);
        echo $json_string;
      }
 }

 function ExistenciaCorreo(){
    require "Conexion.php";
    $correo = $_POST['correo'];
   
    $sqlBuscarCorreo = "SELECT count(*) as contador FROM usuario WHERE correo = '$correo'";
    $result = mysqli_query($con,$sqlBuscarCorreo);
    $row = mysqli_fetch_array($result);

     $contador = $row['contador'];
       
      if($contador == 0){
        $respuesta = array("mensaje"=>true);
        $json_string = json_encode($respuesta);
        echo $json_string;
      }
      else{
        $respuesta = array("mensaje"=>false);
        $json_string = json_encode($respuesta);
        echo $json_string;
      }
 }

 function ValidarRegistroEmpresa($nombre, $foto, $nit, $servicio, $direccion, $telefono, $correo, $contraseña) {
  $respuestaRegistroEmpresa = [];
  if ($nombre != "") {
      if (strlen($nombre) >= 1 && strlen($nombre) <= 50) {
           $nombreAlfabetico = ValidarCaracteresAlfabeticos($nombre);
          if ($nombreAlfabetico == true) {
              if ($foto != "") {
                  if (strlen($foto) > 0 &&  strlen($foto)<= 500) {
                      if ($nit != "") {
                          $DigitosNitContados = ContarDigitosNumero($nit);
                          if ($DigitosNitContados == 10) {
                              $NitSoloNumero = ValidarSoloNumeros($nit);
                              if ($NitSoloNumero) {
                                  $validarExistenciaServicio = VerificarExistenciaServicio($servicio);
                                  if ($validarExistenciaServicio) {
                                      if ($direccion != "") {
                                          if (strlen($direccion) > 0 && strlen($direccion) <= 100) {
                                              if ($telefono != "") {
                                                  $SoloNumeroTelefono = ValidarSoloNumeros($telefono);
                                                  if ($SoloNumeroTelefono) {
                                                      $contarDigitosTelefono = ContarDigitosNumero($telefono);
                                                      if ($contarDigitosTelefono == 10) {
                                                          if ($correo != "") {
                                                              $validarCorreo = ValidarCorreo($correo);
                                                              if ($validarCorreo) {
                                                                  if ($contraseña != "") {
                                                                      if (strlen($contraseña) >= 6 && strlen($contraseña) <= 20) {
                                                                          $respuestaRegistroEmpresa = [true, ""];
                                                                      } else {
                                                                          $respuestaRegistroEmpresa = [false, "La contraseña tiene que tener minimo 6 caracteres y maximo 20"];
                                                                      }
                                                                  } else {
                                                                      $respuestaRegistroEmpresa = [false, "El campo de la contraseña no puede estar vacio"];

                                                                  }
                                                              } else {
                                                                  $respuestaRegistroEmpresa = [false, "Introduzca correctamente el correo"];

                                                              }
                                                          } else {
                                                              $respuestaRegistroEmpresa = [false, "El campo correo no puede estar vacio"];
                                                          }
                                                      } else {
                                                          $respuestaRegistroEmpresa = [false, "El campo telefono tiene que ser de 10 digitos"];
                                                      }
                                                  } else {
                                                      $respuestaRegistroEmpresa = [false, "El campo telefono solo puede tener numeros"];
                                                  }
                                              } else {
                                                  $respuestaRegistroEmpresa = [false, "El campo telefono no puede estar vacio"];

                                              }

                                          } else {
                                              $respuestaRegistroEmpresa = [false, "La direccion tiene que tener minimo 1 caracter y maximo 100"];
                                          }
                                      } else {
                                          $respuestaRegistroEmpresa = [false, "El campo direccion no puede estar vacio"];
                                      }
                                  } else {
                                      $respuestaRegistroEmpresa = [false, "Seleccione el servicio correcto"];
                                  }

                              } else {
                                  $respuestaRegistroEmpresa = [false, "Solo se aceptan numeros en el nit"];
                              }
                          } else {
                              $respuestaRegistroEmpresa = [false, "El nit de la empresa tiene que ser de 10 Digitos"];
                          }
                      } else {
                          $respuestaRegistroEmpresa = [false, "El nit no puede estar vacio"];
                      }
                  } else {
                      $respuestaRegistroEmpresa = [false, "El rango de la foto excede el limite permitido"];
                  }
              } else {
                  $respuestaRegistroEmpresa = [false, "El campo de la foto no puede estar vacio"];
              }

          } else {
              $respuestaRegistroEmpresa = [false, "El campo Nombre no puede contener numeros, ni caracteres especiales"];
          }
      } else {
          $respuestaRegistroEmpresa = [false, "El nombre tiene que tener minimo 1 caracter y maximo 50"];
      }
  } else {
      $respuestaRegistroEmpresa = [false, "El campo Nombre no puede estar vacio"];
  }
  return $respuestaRegistroEmpresa;
}

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

function VerificarExistenciaServicio($servicio) {
  $resultado = false; $i = 0;  $encontro = false;
  $servicios = ['Servicio', 'Reparación', 'Mantenimiento', 'Limpieza', 'Auditoría', 'Asesoría', 'Mensajería',
      'Telefonía', 'Aseguradora', 'Gestoría', 'Agua', 'Gas', 'Telecomunicación', 'Electricidad', 'Bancos', 'Plomería',
      'Diseño', 'Programación', 'Organización de eventos', 'Funeraria', 'Hotel', 'Cine', 'Discoteca', 'Restaurante', 'Ventas',
      'Servicios'
  ];
  $size = count($servicios);
  while ($i < $size && $encontro == false) {
      if ($servicio == $servicios[$i]) {
          $resultado = true;
          $encontro = true;
      }
      else {
          $resultado = false;
          $i++;
      }
  }
  return $resultado;
}

