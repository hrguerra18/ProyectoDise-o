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