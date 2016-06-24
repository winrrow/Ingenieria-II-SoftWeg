<html>
    <head>
        <title>CouchInn - Registro</title>
        <meta charset="UTF-8">
     </head>
</html>
<?php
		session_start();
		include("conectar.php");
		$diaactual=date("d")-1;
		$mesactual=date("m");
		$añotual=date("Y");
		$fecha=$_POST['fechanacimiento'];
		$fechanacimiento=date("d-m-Y",strtotime($fecha)); 
		$dianacimiento=date("d",strtotime($fecha));
		$mesnacimiento=date("m",strtotime($fecha));
		$añonacimiento=date("Y",strtotime($fecha));
		$auxaño=$añotual-$añonacimiento;
		$auxmes=$mesactual-$mesnacimiento;
		$auxdia=$diaactual-$dianacimiento;
		$mail=$_POST['mail'];
		$contraseña=$_POST['contraseña'];
		$contraseña2=$_POST['contraseña2'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$pais=$_POST['pais'];
		$genero=$_POST['genero'];
		$fotoperfil="fotos_perfil/default.jpg";
		$existe = mysql_query("SELECT * FROM usuarios WHERE mail='$mail'",$con);
 		if( mysql_num_rows($existe) == 0){ //verificamos si el usuario existe con un condicional
 				if($auxaño > 18){
								if($contraseña == $contraseña2){
									$_SESSION["mail"]=$mail;
									$sql=("INSERT INTO usuarios (nombre_usuario,apellido,mail,contrasena,megusta,nomegusta,fecha_nac,fotoperfil,es_admin,es_premium,pais,genero,descripcion) VALUES ('$nombre','$apellido','$mail','$contraseña','','','$fecha','$fotoperfil','','','$pais','$genero','')");
									if (!mysql_query($sql,$con)){
										die('error');
									}	
	   								?>
										<script type="text/javascript">
											alert("Se registro exitosamente");
											location.href = "backendusuario.php";
										</script>	
									<?php
								}else{
									?>
										<script type="text/javascript">
											alert("Las contraseñas deben ser iguales");
											location.href = "registro.php";
										</script>	
									<?php
								}
				}
				if(($auxaño == 18)AND($auxmes < 0)) {
							?>
								<script type="text/javascript">
									alert("Le faltan meses para poder registrarse");
									location.href = "registro.php";
								</script>	
							<?php
				}
				if(($auxaño == 18)AND($auxmes == 0)AND($auxdia < 0)){
						?>
							<script type="text/javascript">
								alert("Le faltan dias para poder registrarse");
								location.href = "registro.php";
							</script>	
						<?php
				}
				if(($auxaño == 18)AND($auxmes >= 0)AND($auxdia >= 0)){
							if($contraseña == $contraseña2){
										$_SESSION["mail"]=$mail;
										$sql=("INSERT INTO usuarios (nombre_usuario,apellido,mail,contrasena,megusta,nomegusta,fecha_nac,foto,es_admin,es_premium,pais,genero,descripcion) VALUES ('$nombre','$apellido','$mail','$contraseña','','','$fecha','$fotoperfil','','','$pais','$genero','')");
										if (!mysql_query($sql,$con)){
											die('error');
										}	
	   									?>
										<script type="text/javascript">
											alert("Se registro exitosamente");
											location.href = "backendusuario.php";
										</script>	
										<?php
									}else{
									?>
										<script type="text/javascript">
											alert("Las contraseñas deben ser iguales");
											location.href = "registro.php";
										</script>	
									<?php
								}
				}
				if($auxaño < 18 ){
						?>
							<script type="text/javascript">
								alert("Usted tiene menos de 18 años");
								location.href = "registro.php";
							</script>	
						<?php

				}
 			}else{
 				?>
					<script type="text/javascript">
						alert("El mail ingresado ya existe, por favor ingrese otro");
						location.href = "registro.php";
					</script>	
				<?php
			}
 ?>