<html>
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/menuconopcionesbackend.css" >	
</head>
	<body>
		<header>
			<div id="headconopciones">

				<div id="contenedorimagen">
					<a href="iniciobackend.php" > <img src="imagenes/fondoheader.png" ></a>
				</div>

				<div id="botonesmenu">
							
						<?php 
						include('conectar.php');
						session_start();
						if(!isset($_SESSION['mail'])){
							?>
								<script type="text/javascript">
											alert("Debe iniciar sesion");
											location.href = "login.php";
								</script> 

						<?php  
							}
								$usuario=$_SESSION['mail'];
								$sql= mysql_query("SELECT * FROM usuarios  WHERE mail='$usuario'",$con);
									while($row = mysql_fetch_array($sql)){
										$Premium=$row['es_premium'];
									}	
 							if( $Premium == 0){
 							?>  
 							<a id="uploadCouch" href="buscarcouch.php" class="btn btn-danger"> Buscar Couchs </a> 
						    <a id="herefpremium" href="serpremium.php" class="btn btn-primary"> ¡ Hazte Premium ! </a> 
						    <a id="uploadCouch" href="uploadcouch.php" class="btn btn-success"> Publicar Couch </a>  
							<a id="herefinicio" href="iniciobackend.php" class="btn btn-default"> Ultimos Post </a>
							<a id="herefquienessomos" href="quienessomosbackend.php" class="btn btn-default"> Quienes Somos </a>
							<a id="herefcontacto"	href="contactobackend.php" class="btn btn-default"> Contacto </a>
							<a id="herefinicio" href="miperfil.php" class="btn btn-default"> Mi perfil </a>
							<a id="herefinicio" href="cerrarsesion.php" class="btn btn-default"> Cerrar sesion </a>
							<?php
							}else{
								?>
								<a id="uploadCouch" href="buscarcouch.php" class="btn btn-danger"> Buscar Couchs </a>
								<a id="uploadCouch" href="uploadcouch.php" class="btn btn-success"> Publicar Couch </a>
								<a id="herefinicio" href="iniciobackend.php" class="btn btn-default"> Ultimos Post </a>
								<a id="herefquienessomos" href="quienessomosbackend.php" class="btn btn-default"> Quienes Somos </a>
								<a id="herefcontacto"	href="contactobackend.php" class="btn btn-default"> Contacto </a>
								<a id="herefinicio" href="miperfil.php" class="btn btn-default"> Mi perfil </a>
								<a id="herefinicio" href="cerrarsesion.php" class="btn btn-default"> Cerrar sesion </a>
							<?php
							}
							?>
				</div>
			</div>
		</header>
	</body>
</html>