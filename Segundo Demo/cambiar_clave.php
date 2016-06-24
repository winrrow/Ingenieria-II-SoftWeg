<html>
    <head>
        <title>CouchInn - Registro</title>
        <meta charset="UTF-8">
     </head>
</html>
<?php
include("conectar.php");
$mail=$_POST['mail'];
$contraseña=$_POST["contraseña"];
$contraseña1=$_POST["contraseña1"];
$contrasena_actual=$_POST["contrasena_actual"];

	$sql=mysql_query("SELECT * FROM usuarios WHERE mail = '$mail'",$con);
	if (mysql_num_rows($sql) == 1) {
		while($row = mysql_fetch_array($sql)){
			$_SESSION["mail"] = $row["mail"];
			$contrabase=$row["contrasena"];
		}

		if($contrasena_actual==$contrabase)
		{			
				if( $contraseña == $contraseña1){
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
								location.href = "cambiar_contrasena.php";
						</script>	
					<?php
				}
		}else{
		?>
			<script type="text/javascript">
				alert("Contraseña actual incorrecta, Por favor vuelva a intentarlo");
				location.href = "cambiar_contrasena.php";
			</script>	
		<?php

	}
	}else{
		?>
			<script type="text/javascript">
				alert("Nombre de usuario incorrecto, Por favor vuelva a intentarlo");
				location.href = "cambiar_contrasena.php";
			</script>	
		<?php

	}
?>