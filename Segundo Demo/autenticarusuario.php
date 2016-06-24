<html>
    <head>
        <title>CouchInn - Registro</title>
        <meta charset="UTF-8">
    </head>
</html>
<?php
include("conectar.php");
if(!isset($_SESSION)){
	session_start();
}
	$mail=$_POST['mail'];
	$contraseña=$_POST['contraseña'];
	$consulta=("SELECT * FROM usuarios WHERE mail = '$mail' AND contrasena = '$contraseña'");
	$resultado=mysql_query($consulta,$con);
	$fila=mysql_fetch_array($resultado);
	if(!$fila[0]){ ?>
		<script type="text/javascript">
			alert("verifique su usuario y contraseña");
			location.href = "registro.php";
		</script>	
	<?php
	}else{
		$_SESSION['id_usuario']= $fila['id_usuario'];
		$_SESSION['nombre_usuario']= $fila['nombre_usuario'];
		header("location:backendusuario.php");
	}
?>
