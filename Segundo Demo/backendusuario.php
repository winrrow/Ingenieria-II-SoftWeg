<?php  
include("conectar.php");
/*session_start();
if(!isset($_SESSION['mail'])){
	?>
		<script type="text/javascript">
					alert("Debe iniciar sesion");
					location.href = "login.php";
		</script>	
	} */

include("headconopcionesbackend.php");
$mail=$_SESSION["mail"];
?>
<html>
<head>
	<title>Perfil</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="styles/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/backendusuario.css">
</head>
	<body>		
	<div id="foto">
		
	</div>
	</body>
</html>
