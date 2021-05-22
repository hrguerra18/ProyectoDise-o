<?php 
include "Conexion.php";
    $username = $_POST['usuario'];
    $password = $_POST['contraseña'];
    // $username ="asdq@asdasd.com";
   //$password = "123";
   
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
            $_SESSION['validar'] = true;
            $_SESSION['usuario'] = $nombre;
            $_SESSION['foto'] = $foto;
            $_SESSION['IDusuario'] = $IDusuario;
            $_SESSION['tipo'] = $tipo;

           /* $_SESSION['tipo'] = $tipo;
            $_SESSION['ID'] = $ID;
            $_SESSION['foto'] = $foto;*/
            

            $respuesta = array("mensaje" => "Datos Validos");
            $json_string = json_encode($_SESSION);
            echo $json_string;
        } else{

            $_SESSION['validar'] = false;

            $respuesta = array("mensaje" => "Datos Invalidos");
            $json_string = json_encode($_SESSION);
            echo $json_string;
        }
    }



?>