<!DOCTYPE HTML>
<?php
include_once '../conexion.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $mysqli = new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos);
 $sql_query="DELETE FROM NiveldeAprovechamiento WHERE Id=".$_GET['delete_id'];
  $resultado=$mysqli->query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<html>
	<head>
		<title>ESCUELAS - Nivel de Aprovechamiento</title>
		<meta charset="utf-8" />	
		        <script type="text/javascript">
                function editar_id(id)
                {
                if(confirm('¿Desea modificar?'))
                {
            	   window.location.href='editarNiveldeAprovechamiento.php?edit_id='+id;
                }
                }
                function eliminar_id(id)
                {
                if(confirm('¿Desea eliminar?'))
                {
              	  window.location.href='VerNiveldeAprovechamiento.php?delete_id='+id;
                }
                }
     </script>	
	</head>
	<body>
	<section >
			<div >
				<table align="center" border="1">						
								<th>ID</th>
								<th>Nivel de Aprovechamiento</th>
								
								
						        <th colspan="2">Escolaridad</th>
								</tr>
								<?php
								include_once '../conexion.php';
								$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
								if ($mysqli -> connect_errno) {
								die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
								}
								else
								{
								$sql_query="SELECT * FROM NiveldeAprovechamiento";
								$resultado=$mysqli->query($sql_query);
								while($registro = $resultado->fetch_assoc()) 
								{
								?>
										<tr>
										<td><?php echo $registro["Id"]; ?></td>
										<td><?php echo $registro["NiveldeAprovechamiento"]; ?></td>
									
									    <td align="center"><a href="javascript:editar_id('<?php echo $registro["Id"]; ?>')"><img src="../images/Editar.png" align="EDIT" /></a></td>
										<td align="center"><a href="javascript:eliminar_id('<?php echo $registro["Id"]; ?>')"><img src="../images/Cancelar.png" align="DELETE" /></a></td>
										</tr>
										<?php
								}
								}
								?>
					</table>
				</div>
                <p><a href="NuevoNiveldeAprovechamiento.php">Nuevo</a></p>
			</section>				
	</body>
</html>
