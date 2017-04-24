<?php 

// Parametros a configurar para la conexion de la base de datos 

$hostdb = "localhost";    // sera el valor de nuestra servidor
$usuariodb = "root";    // sera el valor de nuestra BD 
$clavedb = "rosita.20";    // sera el valor de nuestra BD 
$basededatos = "EscuelaBD";    // sera el valor de nuestra BD 

$tabla1="NiveldeAprovechamiento";    // sera el valor de la tabla tipos de productos
$tabla2="NombredelaEscuela"; 
$tabla3="NumerodeAlumnos"; 

// Fin de los parametros a configurar para la conexion de la base de datos 
$cadenaConexion = mysqli_connect("$hostdb","$usuariodb","$clavedb","$basededatos");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Falló la conexion a MySQL: " . mysqli_connect_error();
  }
?>