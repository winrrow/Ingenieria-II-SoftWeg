<?php
/*include("conectar.php");
session_start(); 
if(!isset($_SESSION['mail'])){
	?>
		<script type="text/javascript">
					alert("Debe iniciar sesion");
					location.href = "login.php";
		</script>	
	<?php
	}
	 */

include("headconopcionesbackend.php");
$mail=$_SESSION["mail"];
?>
<html>
<head>
	<title>Perfil</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="styles/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/iniciobackend.css">
</head>
	<body id="color">		
			<div id="paisajemiperfil">
				<h1 id="tituloperfil"> Ultimos Post </h1>
			</div>
					<?php
					$todos = mysql_query("SELECT tipo_couchs.nombre_tipocouch, couchs.titulo, couchs.provincia, couchs.ciudad, couchs.id_tipo_couch, couchs.megusta, couchs.nomegusta, couchs.capacidad, couchs.descripcion,couchs.fecha_desde,couchs.fecha_hasta, couchs.fotocouch, usuarios.nombre_usuario,usuarios.es_premium FROM couchs INNER JOIN tipo_couchs on couchs.id_tipo_couch=tipo_couchs.id_tipo_couch INNER JOIN usuarios on usuarios.mail=couchs.mail ORDER BY couchs.id_couch DESC");
					if( mysql_num_rows($todos) != 0){
							while($resultado=mysql_fetch_array($todos)){ 	
								$fecha=date("d-m-Y",strtotime($resultado['fecha_desde'])); 
								$fecha1=date("d-m-Y",strtotime($resultado['fecha_hasta'])); 
								//echo '<form action="actualizarcouch.php"  method="POST">';
								$premium=$resultado['es_premium'];
								$fotopremium="fotos_couch/couchnopremium.png";
								if($premium){
									 echo '<div id=imagen><img src="'.$resultado["fotocouch"].'"width=100% height=100%/></div>';
								}else{
									echo '<div id=imagen><img src="'.$fotopremium.' "width=100% height=100% /></div>';
								}
											//echo '<div id=imagen><img src="'.$resultado["fotocouch"].'"width=100% height=100%/></div>';
												echo "<div id=info>";	
													echo'<p>Titulo: '.$resultado["titulo"].'</p>';	
													echo'<p id=provincia>Provincia: '.$resultado["provincia"].'</p>';
													echo'<p id=fechadesde>Fecha Desde: '.$fecha.'</p>';
													echo'<p id=megusta>Me Gusta: '.$resultado["megusta"].'</p>';
													
													echo'<div id=otrosdatos><p id=nombre>Tipo Couch: '.$resultado["nombre_tipocouch"].'</p>';
													echo'<p id=ciudad>Ciudad: '.$resultado["ciudad"].'</p>';
													echo'<p id=hasta>Fecha Hasta: '.$fecha1.'</p>';
													echo'<p id=nomegusta>No Me Gusta: '.$resultado["nomegusta"].'</p>';
													echo'<p id=nomegusta>Propietario: '.$resultado["nombre_usuario"].'</p></div>';
													
													echo'<p id=capacidad>Capacidad: '.$resultado["capacidad"].'</p>';
													echo'<p id=desc>Descripcion :'.$resultado["descripcion"].'</p>';
												echo "</div>";
												//echo'<div id=boton><input type="hidden" name="id" value="'.$resultado["id_couch"].'">
												//		<input type="submit" id=editar  name="editar" value="editar">
											//			<input type="submit" id=eliminar name="eliminar"  value="eliminar"></div>';	
									//echo "</form>";
							}
					}else{
						?> 
						<div id="sincouch">
							
						</div> 
					<?php 
					}
				?>


	</body>
</html>