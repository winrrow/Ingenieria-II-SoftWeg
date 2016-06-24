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
	if(isset($_POST['editar'])){
		$nombrenuevo=$_POST['nombre'];
		$id_tipo=$_POST['id'];
		if($nombrenuevo != ''){
			$existe = mysql_query("SELECT * FROM tipo_couchs WHERE nombre_tipocouch ='$nombrenuevo'",$con);
 			if( mysql_num_rows($existe) == 0){
 				 mysql_query("UPDATE tipo_couchs set nombre_tipocouch='$nombrenuevo' WHERE id_tipo_couch='$id_tipo'",$con);
 				?>
						<script type="text/javascript">
							alert("Se edito correctamente el nombre del tipo de couch");
							location.href = "agregartipocouch.php";
						</script>	
				<?php
 			}else{
 					?>
						<script type="text/javascript">
							alert("Ya existe el nombre ingresado, por favor ingrese otro nombre");
							location.href = "agregartipocouch.php";
						</script>	
					<?php
 			}
		}else{
			  ?>
						<script type="text/javascript">
							alert("Debe completar con algun nombre para que se pueda editar el nombre del tipo de couch");
							location.href = "agregartipocouch.php";
						</script>	
			   <?php
		}	
	}
		
if(isset($_POST['deshabilitar'])){
	$deshabilitar=$_POST['deshabilitar'];
	$id_deshabilitar=$_POST['id'];
	if($deshabilitar = 'deshabilitar'){
		 mysql_query("UPDATE tipo_couchs set habilitado='no' WHERE id_tipo_couch='$id_deshabilitar'",$con);
		?>
			<script type="text/javascript">
				alert("El tipo de couch se deshabilito correctamente");
				location.href = "agregartipocouch.php";
			</script>	
		<?php
	}
}
if(isset($_POST['habilitar'])){
	$habilitar=$_POST['habilitar'];
	$id_habilitar=$_POST['id'];
	if($habilitar = 'habilitar'){
			 mysql_query("UPDATE tipo_couchs set habilitado='si' WHERE id_tipo_couch='$id_habilitar'",$con);	
			?>
				<script type="text/javascript">
					alert("El tipo de couch se habilito correctamente");
					location.href = "agregartipocouch.php";
				</script>	
			<?php
	}
}
		
if(isset($_POST['nombreagregar'])){
	$nombreagregar=$_POST['nombreagregar'];
	if($nombreagregar == ''){
		?>
			<script type="text/javascript">
				alert("El nombre del tipo de couch no debe estar vacio");
				location.href = "agregartipocouch.php";
			</script>	
		<?php
	}else{
			$existe = mysql_query("SELECT * FROM tipo_couchs WHERE nombre_tipocouch ='$nombreagregar'",$con);
 				if( mysql_num_rows($existe) == 0){
 						$si='si';
 						$sql=("INSERT INTO tipo_couchs (nombre_tipocouch,habilitado) VALUES ('$nombreagregar','$si')");
						if (!mysql_query($sql,$con)){
										die('error');
						}	
									?>
										<script type="text/javascript">
											alert("El nombre del tipo de couch se agrego correctamente");
											location.href = "agregartipocouch.php";
										</script>	
								   <?php
				}else{
						?>
							<script type="text/javascript">
								alert("El nombre del tipo de couch ya existe, por favor ingrese otro");
								location.href = "agregartipocouch.php";
							</script>	
						<?php

				}

		}
}


if(isset($_POST['eliminar'])){
	$nombreeliminar=$_POST['eliminar'];
	$id_eliminar=$_POST['id'];
 	$sql= mysql_query("SELECT COUNT(*) FROM couchs INNER JOIN tipo_couchs on couchs.'$id_eliminar'=tipo_couchs.'$id_eliminar'",$con);
			$res=mysql_query("DELETE FROM tipo_couchs WHERE id_tipo_couch='$id_eliminar'",$con); 
			if($res != NULL){ 
				?>
				<script type="text/javascript">
					alert("El tipo de couch se borro exitosamente");
					location.href = "agregartipocouch.php";
				</script>
			<?php }
			else {
			 ?>
					<script type="text/javascript">
							alert("El tipo de couch esta asginado por usuarios, no se puede eliminar por el momento");
							location.href = "agregartipocouch.php";
						</script>	
					<?php }
			}			  
	
?>