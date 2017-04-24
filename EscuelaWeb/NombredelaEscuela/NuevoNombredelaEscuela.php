<!DOCTYPE HTML>
<?php
include_once '../conexion.php';
if(isset($_POST['btn-guardar']))
{
 // variables for input data
 $id = $_POST['Id'];
 $Clave= $_POST['Clave'];
 $Nombre= $_POST['Nombre'];
 $NombredelDirector= $_POST['NombredelDirector'];
 $Ubicacion= $_POST['Ubicacion'];
 // sql query for inserting data into database
 	$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query ="insert into  NombredelaEscuela(id, Clave, Nombre, NombredelDirector, Ubicacion)values( '$id', '$Clave', '$Nombre', '$NombredelDirector', '$Ubicacion' )";
  if($resultado=$mysqli->query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Datos insertados');
  window.location.href='VerNombredelaEscuela.php';
  </script>
  <?php
 }
}
?>


<html>
	<head>
		<title>ESCUELA</title>
		<meta charset="utf-8" />
	</head>
	<body >
			<section >
				<div >
					<header >
						<h1>NOMBRE DE LA ESCUELA</h1>
							<form method="post">
                            <table align="center">                           
                            <tr>
                            <td><input type="text" name="Id" placeholder="Id" required /></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="Clave" placeholder="Clave" required /></td>
                            </tr>
							<tr>
                            <td><input type="text" name="Nombre" placeholder="Nombre" required /></td>
                            </tr>
							<tr>
                            <td><input type="text" name="NombredelDirector" placeholder="NombredelDirector" required /></td>
                            </tr>
							<tr>
                            <td><input type="text" name="Ubicacion" placeholder="Ubicacion" required /></td>
                            </tr>
						    <tr>
						    <td><button type="submit" name="btn-guardar"><strong>Guardar</strong></button></td>
                            </tr>
						    </table>
                            </form>
					</header>									
				</div>
			</section>
	</body>
</html>