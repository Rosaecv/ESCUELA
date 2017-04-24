<!DOCTYPE HTML>
<?php
include_once '../conexion.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $mysqli = new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos);
 $sql_query="DELETE FROM NombredelaEscuela WHERE Id=".$_GET['delete_id'];
  $resultado=$mysqli->query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<html>
	<head>
		<title>ESCUELAS -</title>
		<meta charset="utf-8" />	
		        <script type="text/javascript">
                function editar_id(id)
                {
                if(confirm('¿Desea modificar?'))
                {
            	   window.location.href='editarNombredelaEscuela.php?edit_id='+id;
                }
                }
                function eliminar_id(id)
                {
                if(confirm('¿Desea eliminar?'))
                {
              	  window.location.href='VerNombredelaEscuela.php?delete_id='+id;
                }
                }
     </script>	
	</head>
	<body>
	<section >
			<div >
				<table align="center" border="1">						
								<th>ID</th>
								<th>CLAVE</th>
								<th>NOMBRE</th>
								<th>NOMBRE DEL DIRECTOR</th>
								<th>UBICACION</th>
						        <th colspan="2">ESCUELAS</th>
								</tr>
								<?php
								include_once '../conexion.php';
								$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
								if ($mysqli -> connect_errno) {
								die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
								}
								else
								{
								$sql_query="SELECT * FROM NombredelaEscuela";
								$resultado=$mysqli->query($sql_query);
								while($registro = $resultado->fetch_assoc()) 
								{
								?>
										<tr>
										<td><?php echo $registro["Id"]; ?></td>
										<td><?php echo $registro["Clave"]; ?></td>
										<td><?php echo $registro["Nombre"]; ?></td>
										<td><?php echo $registro["NombredelDirector"]; ?></td>
										<td><?php echo $registro["Ubicacion"]; ?></td>
									    <td align="center"><a href="javascript:editar_id('<?php echo $registro["Id"]; ?>')"><img src="../images/Editar.png" align="EDIT" /></a></td>
										<td align="center"><a href="javascript:eliminar_id('<?php echo $registro["Id"]; ?>')"><img src="../images/Cancelar.png" align="DELETE" /></a></td>
										</tr>
										<?php
								}
								}
								?>
					</table>
				</div>
                <p><a href="NuevoNombredelaEscuela.php">Nuevo</a></p>
			</section>				
	</body>
</html>
