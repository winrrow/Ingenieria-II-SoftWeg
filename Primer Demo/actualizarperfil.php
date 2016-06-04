<?php
include("conectar.php");
session_start();
if(!isset($_SESSION['mail'])){
	?>
		<script type="text/javascript">
					alert("Debe iniciar sesion");
					location.href = "login.php";
		</script>	
	<?php
}
$mail=$_SESSION["mail"];
$mailmodificado=$_POST['mail'];
$_SESSION['mail']=$mailmodificado;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$pais=$_POST['pais'];
$informacion=$_POST['textarea'];
$genero=$_POST['genero'];
$foto=$_FILES["foto"]["name"];
if ($foto == NULL)
{
	$sql=("UPDATE usuarios SET nombre_usuario = '$nombre', apellido ='$apellido', mail ='$mailmodificado', pais ='$pais', genero = '$genero', descripcion = '$informacion' WHERE mail = '$mail'");
			if (!mysql_query($sql,$con)){
				die('error');
			}	
}
else {
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos_perfil/".$foto;
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
//copy($ruta,$destino);
	$sql=("UPDATE usuarios SET nombre_usuario = '$nombre', apellido ='$apellido', mail ='$mailmodificado', fotoperfil ='$destino', pais ='$pais', genero = '$genero', descripcion = '$informacion' WHERE mail = '$mail'");
			if (!mysql_query($sql,$con)){
				die('error');
			}	
}
	   		?>
				<script type="text/javascript">
					alert("El perfil se modifico correctamente");
					location.href = "miperfil.php";
				</script>	
			<?php
?>