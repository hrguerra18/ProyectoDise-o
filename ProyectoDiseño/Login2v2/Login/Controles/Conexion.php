<?php
//Tambien Existe otro Metodo PDO para establecer conexion con base de datos
//Estudiar SESSION, POST, GET, AJAX
session_start();
$host = "localhost"; /* equipo */
$user = "root"; /* usuario */
$password = ""; /* clave */
$dbname = "empleo"; /* base de datos */

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
} 
?>