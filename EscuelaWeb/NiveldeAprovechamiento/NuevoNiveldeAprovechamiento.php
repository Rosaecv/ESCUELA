<!DOCTYPE HTML>
<?php
include_once '../conexion.php';
if(isset($_POST['btn-guardar']))
{
 // variables for input data
 $id = $_POST['Id'];
 $NiveldeAprovechamiento= $_POST['NiveldeAprovechamiento'];

 // sql query for inserting data into database
 	$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
$sql_query ="insert into NiveldeAprovechamiento(id, NiveldeAprovechamiento)values('$id', '$NiveldeAprovechamiento')";
  if($resultado=$mysqli->query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Datos insertados');
  window.location.href='VerNiveldeAprovechamiento.php';
  </script>
  <?php
 }
}
?>


<html>
	<head>
		<title>ESCOLARIDAD</title>
		<meta charset="utf-8" />
	</head>
	<body >
			<section >
				<div >
					<header >
						<h1>ESCOLARIDAD</h1>
							<form method="post">
                            <table align="center">                           
                            <tr>
                            <td><input type="text" name="Id" placeholder="Id" required /></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="NiveldeAprovechamiento" placeholder="NiveldeAprovechamiento" required /></td>
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