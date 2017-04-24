<!DOCTYPE HTML>
<?php
include_once '../conexion.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $mysqli = new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos);
 $sql_query="DELETE FROM NumerodeAlumnos WHERE Id=".$_GET['delete_id'];
  $resultado=$mysqli->query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<html>
	<head>
		<title>ESCUELAS - Numero de Alumnos</title>
		<meta charset="utf-8" />	
		        <script type="text/javascript">
                function editar_id(id)
                {
                if(confirm('¿Desea modificar?'))
                {
            	   window.location.href='editarNumerodeAlumnos.php?edit_id='+id;
                }
                }
                function eliminar_id(id)
                {
                if(confirm('¿Desea eliminar?'))
                {
              	  window.location.href='VerNumerodeAlumnos.php?delete_id='+id;
                }
                }
     </script>	
	</head>
	<body>
	<section >
			<div >
				<table align="center" border="1">						
								<th>ID</th>
								<th>MATRICULA</th>
								<th>NOMBRE</th>
								
						        <th colspan="2">ALUMNOS</th>
								</tr>
								<?php
								include_once '../conexion.php';
								$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
								if ($mysqli -> connect_errno) {
								die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
								}
								else
								{
								$sql_query="SELECT * FROM NumerodeAlumnos";
								$resultado=$mysqli->query($sql_query);
								while($registro = $resultado->fetch_assoc()) 
								{
								?>
										<tr>
										<td><?php echo $registro["Id"]; ?></td>
										<td><?php echo $registro["Matricula"]; ?></td>
										<td><?php echo $registro["Nombre"]; ?></td>
									    <td align="center"><a href="javascript:editar_id('<?php echo $registro["Id"]; ?>')"><img src="../images/Editar.png" align="EDIT" /></a></td>
										<td align="center"><a href="javascript:eliminar_id('<?php echo $registro["Id"]; ?>')"><img src="../images/Cancelar.png" align="DELETE" /></a></td>
										</tr>
										<?php
								}
								}
								?>
					</table>
				</div>
                <p><a href="NuevoNumerodeAlumnos.php">Nuevo</a></p>
			</section>				
	</body>
</html>

               
			