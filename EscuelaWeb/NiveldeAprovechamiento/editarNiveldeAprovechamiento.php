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
<html>
	<head>
		<title>ESCUELA</title>
		<meta charset="utf-8" />
		</head>
	         <body >
			<section >
				<div >
					<header >
	                     <h1>MODIFICAR</h1>
						<form method="post">
                            <table align="center">                           
                            <tr>
                            <td><input type="text" name="Id" placeholder="Id" required /></td>
                            </tr>
                            <tr>
                            <td><input type="text" name="NiveldeAprovechamiento" placeholder="NiveldeAprovechamiento" required /></td>
                            </tr>
						    <tr>
						    <td><button type="submit" name="btn-Actualizar"><strong>Actualizar</strong></button></td>
                            </tr>
						    </table>
                            </form>
					</header>									
				</div>
			</section>
	</body>
</html>