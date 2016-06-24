<?php
/*include("conectar.php");
session_start(); 
if(!isset($_SESSION['mail'])){
	?>
		<script type="text/javascript">
					alert("Debe iniciar sesion");
					location.href = "login.php";
		</script>	
	<?php } */

include("headconopcionesbackend.php");
$mail=$_SESSION["mail"];
	$sql= mysql_query("SELECT * FROM usuarios  WHERE mail='$mail'",$con);
						while($row = mysql_fetch_array($sql)){
						$nombre=$row['nombre_usuario'];
						$apellido=$row['apellido'];
						$genero=$row['genero'];
						$pais=$row['pais'];
						$descripcion=$row["descripcion"];
						$megusta=$row['megusta'];
						$nomegusta=$row['nomegusta'];
						$fecha=$row['fecha_nac'];
						$admin=$row['es_admin'];
					}
							
	$fechanacimiento=date("d-m-Y",strtotime($fecha));
?>
<html>
<head>
	<title>Perfil</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="styles/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/miperfil.css">
</head>
	<body>		
			<div id="paisajemiperfil">
				<h1 id="tituloperfil"> Mi Perfil </h1>
			</div>
			
			<div id="fotoper">
				<?php $sql= mysql_query("SELECT * FROM usuarios  WHERE mail='$mail'",$con);
					while($row = mysql_fetch_array($sql)){
						echo '<img src="'.$row["fotoperfil"].'"width=100% height=100%/> ';  
					}
				?>
			</div>
	
			<div id=infoper>
				<p class="p">Nombre: <?php echo $nombre ?> </p>
				<p class="p">Apellido: <?php echo $apellido ?> </p>
				<p class="p">Pais: <?php echo $pais ?> </p>
				<p class="p">Genero: <?php echo $genero ?> </p>
				<p class="p">Fecha Nacimiento: <?php echo $fechanacimiento ?> </p>
				<p class="p"> Descripcion: <?php echo $descripcion ?> </p>
			</div>

			<div id="megustan">
				<p id="pmegusta">Me Gusta: <?php echo $megusta ?> </p>
				<p id="pnomegusta">No me gusta: <?php echo $nomegusta ?> </p>
			</div>
			

			
			<?php  

				if($admin ==0){
					?>	
						<div id="botonesperfil">
								<a id="modificarcouch" href="bajausuario.php" class="btn btn-success"> Cerrar cuenta </a>
								<a id="modificarperfil" href="modificarperfil.php" class="btn btn-success"> Modificar Perfil </a>
								<a id="modificarcouch" href="miscouch.php" class="btn btn-success"> Mis Couch </a>
								<a id="modificarcouch" href="reservas.php" class="btn btn-success"> Solicitudes Enviadas </a>
								<a id="modificarcouch" href="solicitudes.php" class="btn btn-success"> Solicitudes Recibidas </a>


						</div>
				<?php
				}else{
					?>
						<div id="botonesperfil">
								<a href="agregartipocouch.php" class="btn btn-success"> Administrar Tipos de Couch </a>
								<a href="modificarperfil.php" class="btn btn-success"> Modificar Perfil </a>
								<a id="modificarcouch" href="miscouch.php" class="btn btn-success"> Mis Couch </a>
								<a id="modificarcouch" href="reservas.php" class="btn btn-success"> Solicitudes Enviadas </a>
								<a id="modificarcouch" href="solicitudes.php" class="btn btn-success"> Solicitudes Recibidas </a>
						</div>
				<?php
				}

			?>
	</body>
</html>