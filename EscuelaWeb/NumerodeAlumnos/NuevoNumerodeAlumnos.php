<!DOCTYPE HTML>
<?php
include_once '../conexion.php';
if(isset($_POST['btn-guardar']))
{
 // variables for input data
 $id = $_POST['Id'];
 $Matricula= $_POST['Matricula'];
 $Nombre= $_POST['Nombre'];

 // sql query for inserting data into database
 	$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
    $sql_query ="insert into NumerodeAlumnos(id, Matricula, Nombre)values('$id', '$Matricula','$Nombre' )";
  if($resultado=$mysqli->query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Datos insertados');
  window.location.href='VerNumerodeAlumnos.php';
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
						<h1>NUMERO DE ALUMNOS</h1>
							<form method="post">
                            <table align="center">                           
                            <tr>
                            <td><input type="text" name="Id" placeholder="Id" required /></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="Matricula" placeholder="Matricula" required /></td>
                            </tr>
							<tr>
                            <td><input type="text" name="Nombre" placeholder="Nombre" required /></td>
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