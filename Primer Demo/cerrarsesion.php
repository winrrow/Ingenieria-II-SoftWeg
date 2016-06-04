<?php
session_start();
if ($_SESSION["mail"]) {
	session_destroy();
	?>
		<script type="text/javascript">
			alert("Cerro sesion exitosamente, Gracias por su visita!");
			location.href = "inicio.php";
		</script>	
	<?php 
}else{
		?>	
			<script type="text/javascript">
				alert("Se registro exitosamente");
				location.href = "backendusuario.php";
			</script>	
		<?php
}
?>