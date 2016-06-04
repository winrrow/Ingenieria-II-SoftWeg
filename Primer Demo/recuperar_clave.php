<html>
    <head>
        <title>CouchInn - Registro</title>
        <meta charset="UTF-8">
     </head>
</html>
<?php
include("conectar.php");
$mail=$_POST['mail'];
//$contraseña=$_POST["contraseña"];
//$contraseña1=$_POST["contraseña1"];
	$sql=mysql_query("SELECT * FROM usuarios WHERE mail = '$mail'",$con);
	if (mysql_num_rows($sql) == 1) {
		while($row = mysql_fetch_array($sql)){
			$_SESSION["mail"] = $row["mail"];
			$_SESSION["id_usuario"] = $row["id_usuario"];
		}
		?>
				<script type="text/javascript">
					alert("Se le envio un mail con instrucciones para restablecer la contraseña");
					location.href = "login.php";
				</script>	
		<?php
	}else{
			?>
				<script type="text/javascript">
					alert("Nombre de usuario incorrecto, Por favor vuelva a intentarlo");
					location.href = "olvide_contrasena.php";
				</script>	
		<?php
	}

		

		/*if( $contraseña == $contraseña1){
				mysql_query("UPDATE usuarios set contrasena='$contraseña' WHERE mail='$mail'",$con);
				?>
				<script type="text/javascript">
					alert("Se cambio la contraseña satifactoriamente");
					location.href = "login.php";
				</script>	
				<?php
		}else{
			?>
				<script type="text/javascript">
						alert("Contraseñas distintas, intentelo de nuevo");
						location.href = "olvide_contrasena.php";
				</script>	
			<?php
		}
	}else{
		?>
			<script type="text/javascript">
				alert("Nombre de usuario incorrecto, Por favor vuelva a intentarlo");
				location.href = "olvide_contrasena.php";
			</script>	
		<?php

	}*/
?>