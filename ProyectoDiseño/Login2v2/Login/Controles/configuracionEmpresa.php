<?php 
 
if(empty($_POST['accion'])){
    $_POST['accion'] = "General";
}

switch($_POST['accion']){
    case "cambiarCorreo":
        CambiarCorreoEmpresa();
    break;
    case "cambiarContrase├▒a":
        CambiarContrase├▒aEmpresa();
    break;

}


function CambiarCorreoEmpresa(){
    session_start();
    require "Conexion.php";
    $correoAnterior = $_POST['correoAnterior'];
    $idUsuario = $_POST['idUsuario'];
    $correoNuevo1 = $_POST['correoNuevo1'];
    $correoNuevo2 = $_POST['correoNuevo2'];

    // $idUsuario = "2";
    // $correoNuevo1 = "as12d@gmail.com";
    // $correoAnterior = "juan@gmail.com";


    $contador = BuscarExistenciaCorreo($correoNuevo1);

    if($contador == 0){
        $sql = "UPDATE empresa SET correo = '$correoNuevo1' WHERE NIT = '$idUsuario' AND correo='$correoAnterior'";

        ModificarCorreoUsuario($correoAnterior,$idUsuario,$correoNuevo1);
        
        if(mysqli_query($con,$sql)){
            $_SESSION['correo'] = $correoNuevo1;
            $resultado = array("mensaje"=> "Se modifico correctamente");
            $json_string = json_encode($resultado);
            echo $json_string;
        }else{
            $resultado = array("mensaje"=> "Error" . mysqli_error($con));
            $json_string = json_encode($resultado);
            echo $json_string;
        }
    }else{
        $resultado = array("mensaje"=> "Ya el correo se encuentra registrado, pruebe con otro");
        $json_string = json_encode($resultado);
        echo $json_string;
    }


}

function BuscarExistenciaCorreo($correoNuevo1){
    
    require "Conexion.php";
    $sqlBuscarCorreo = "SELECT count(*) as contador FROM usuario WHERE correo = '$correoNuevo1'";
    $result = mysqli_query($con,$sqlBuscarCorreo);
    $row = mysqli_fetch_array($result);

     $contador = $row['contador'];
    return $contador;
}

function ModificarCorreoUsuario($correoAnterior,$idUsuario,$correoNuevo1){
    require "Conexion.php";

    $sqlUsuario = "UPDATE usuario SET correo = '$correoNuevo1' WHERE correo='$correoAnterior'";
    $resultado = mysqli_query($con,$sqlUsuario);

    return $resultado;

}


function CambiarContrase├▒aEmpresa(){
    session_start();
    require "Conexion.php";
    $correo = $_POST['correo'];
    $contrase├▒aEmpresa1 = $_POST['contrase├▒aEmpresa1'];
    $contrase├▒aEmpresa2 = $_POST['contrase├▒aEmpresa2'];

    $sql = "UPDATE usuario SET contrase├▒a = '$contrase├▒aEmpresa1' WHERE correo='$correo'";
     
    if(mysqli_query($con,$sql)){
        $resultado = array("mensaje"=> "Se modifico correctamente");
        $json_string = json_encode($resultado);
         echo $json_string;
    }else{
        $resultado = array("mensaje"=> "Error" . mysqli_error($con));
        $json_string = json_encode($resultado);
        echo $json_string;
    }
}
















?>