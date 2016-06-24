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
$sql=mysql_query("SELECT * FROM usuarios WHERE mail = '$mail' AND contrasena = '$contrasena' AND dado_baja='no'",$con);
	if (mysql_num_rows($sql) == 1) {
		while($row = mysql_fetch_array($sql)){
			$_SESSION["mail"] = $row["mail"];
			$_SESSION["id_usuario"] = $row["id_usuario"];
		}
		header("location:backendusuario.php");
	}
	else
	{
		$sql2= mysql_query("SELECT * FROM usuarios  WHERE mail='$mail' and contrasena='$contrasena' AND dado_baja='si'",$con);
		if (mysql_num_rows($sql2) !=0) {
					?>
					<script type="text/javascript">
						alert("Cuenta desactivada. Por favor registrese con un nuevo mail.");
						location.href = "index.php";
					</script>	
					<?php
		}

				?>
					<script type="text/javascript">
						alert("Nombre de usuario o contraseña incorrecta, Por favor vuelva a intentarlo");
						location.href = "login.php";
					</script>	
				<?php
			
	}

?>