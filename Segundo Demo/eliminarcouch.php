<?php
include("conectar.php");
include("headconopcionesbackend.php");
$id=$_POST['id'];
//preguntar si depende  de las reservas que tiene...


$reservas=mysql_query("SELECT * from reservas WHERE id_couch='$id' AND estado='Aceptado'",$con);
if( mysql_num_rows($reservas) != 0){
	?>

						<script>
               				alert('El couch no puede darse de baja porque existen reservas pendientes concretadas.')
                                location.href="miscouch.php";
                            </script>
                            <?php
}
else
{
	$reservas2=mysql_query("SELECT * from reservas WHERE id_couch='$id' AND estado='Esperando'",$con);
	if( mysql_num_rows($reservas2) != 0){

						$sql= mysql_query("UPDATE couchs SET baja_couch=1 WHERE id_couch='$id'",$con);
						?>
		
						<script>
               				alert('El couch se dio de baja para reservas posteriores, ya no aparecerá en las busquedas. Las solicitudes pendientes continuarán apareciendo.')
                                location.href="miscouch.php";
                            </script>
                            <?php

										}
}										
	$reservas3=mysql_query("SELECT * from reservas WHERE id_couch='$id' AND (estado='Esperando' OR estado='Aceptado')",$con);
		if(mysql_num_rows($reservas3) ==0){
						$sql= mysql_query("UPDATE couchs SET baja_couch=1 WHERE id_couch='$id'",$con);
							?>
							<script>
               				alert('El couch fue dado de baja con éxito.')
                                location.href="miscouch.php";
                            </script>
                            <?php
											}