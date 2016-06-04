<html>
    <head>
        <meta charset="UTF-8">
     </head>
</html>
<?php
session_start();
include("./conectar.php");
$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];
$sql=mysql_query("SELECT * FROM usuarios WHERE mail = '$mail' AND contrasena = '$contrasena'",$con);
	if (mysql_num_rows($sql) == 1) {
		while($row = mysql_fetch_array($sql)){
			$_SESSION["mail"] = $row["mail"];
			$_SESSION["id_usuario"] = $row["id_usuario"];
		}
		header("location:backendusuario.php");
	}else{
		?>
			<script type="text/javascript">
				alert("Nombre de usuario o contraseña incorrecta, Por favor vuelva a intentarlo");
				location.href = "login.php";
			</script>	
		<?php

	}
	
?>