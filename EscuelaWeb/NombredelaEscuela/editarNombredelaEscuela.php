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
		<title>ESCUELAS - Nombre de la Escuela</title>
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
<html>
	<head>
		<title>ESCUELA</title>
		<meta charset="utf-8" />
	</head>
	<body >
			<section >
				<div >
					<header >
						<h1>Modificar</h1>
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
						    <td><button type="submit" name="btn-Actualizar"><strong>Actualizar</strong></button></td>
                            </tr>
						    </table>
                            </form>
					</header>									
				</div>
			</section>
	</body>
</html>