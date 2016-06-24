<?php  
include("conectar.php");
session_start();
$mail=$_SESSION["mail"];
$mail1=$_POST['mail'];
$contrasena1=$_POST['contrasena1'];
$contrasena2=$_POST['contrasena2'];
$sql= mysql_query("SELECT * FROM usuarios  WHERE mail='$mail'",$con);
					while($row = mysql_fetch_array($sql)){
							$contrasenadb=$row['contrasena'];
							$mail_db=$row=['mail'];
					}
	if($mail == $mail1){
		    if(($contrasenadb == $contrasena1)){
		    	
				$existe = mysql_query("SELECT * FROM reservas INNER JOIN couchs ON reservas.id_couch=couchs.id_couch WHERE couchs.mail='$mail' AND reservas.estado='Aceptado'",$con);
				$existe2 = mysql_query("SELECT * FROM reservas INNER JOIN couchs ON reservas.id_couch=couchs.id_couch WHERE reservas.mail='$mail' AND reservas.estado='Aceptado'",$con);

				$existe3 = mysql_query("SELECT * FROM couchs WHERE couchs.mail='$mail' and couchs.baja_couch=0",$con);
			 	if( (mysql_num_rows($existe)) == 0  AND (mysql_num_rows($existe2) == 0)  ){

			 		if( mysql_num_rows($existe3) == 0){
							 mysql_query("UPDATE usuarios set dado_baja='si' WHERE mail='$mail' AND contrasena='$contrasena1' ",$con);
					 	?>
							<script type="text/javascript">
								alert("Se ha dado exitosamente de baja del sistema, no podra volver a ingresar con el mail usado");
								location.href = "index.php";
							</script>	
						<?php	
					}		
					else{
						$existe4 = mysql_query("UPDATE couchs SET couchs.baja_couch=1 WHERE couchs.mail='$mail' and couchs.baja_couch=0",$con);
								   mysql_query("UPDATE usuarios set dado_baja='si' WHERE mail='$mail' AND contrasena='$contrasena1' ",$con);

							?>
							<script type="text/javascript">
								alert("Como tenía Couchs publicados, se dieron de baja. Se ha dado exitosamente de baja del sistema, no podra volver a ingresar con el mail usado ");
								location.href = "index.php";
							</script>	
							<?php
					 }
				}else
					{
						?>
							<script type="text/javascript">
								alert("Usted no se puede dar de baja porque tiene reservas concretadas pendientes");
								location.href = "bajausuario.php";
							</script>	
						<?php	
					}
		
		}
				?>
				<script type="text/javascript">
					alert("Las contaseñas ingresadas son incorrectas.");
					location.href = "bajausuario.php";
				</script>	
				<?php
		}
?>