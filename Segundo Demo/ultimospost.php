<?php  
include("headconopciones.php");
?>
<html>
<head> 
	<title>Ultimos Post</title>
	 <meta charset="UTF-8">
	 <meta charset="ISO-8859-1">
	 <link rel="stylesheet" href="styles/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/ultimospost.css">
</head>
	<body id="color">		
			<div id="paisajemiperfil">
				<h1 id="tituloperfil"> Ultimos Post </h1>
			</div>
					<?php
					include("conectar.php");
					$todos = mysql_query("SELECT * FROM couchs INNER JOIN usuarios on usuarios.mail=couchs.mail ORDER BY couchs.id_couch DESC");
					while($resultado=mysql_fetch_array($todos)){ 	
							$fecha=date("d-m-Y",strtotime($resultado['fecha_desde'])); 
							$fecha1=date("d-m-Y",strtotime($resultado['fecha_hasta'])); 
							//echo '<form action="actualizarcouch.php"  method="POST">';
							 echo '<div id=imagen><img src="'.$resultado["fotocouch"].'"width=100% height=100%/></div>';
										echo "<div id=info>";	
											echo'<p>Titulo: '.$resultado["titulo"].'</p>';	
											echo'<p id=provincia>Provincia: '.$resultado["provincia"].'</p>';
											echo'<p id=fechadesde>Fecha Desde: '.$fecha.'</p>';
											echo'<p id=megusta>Me Gusta: '.$resultado["megusta"].'</p>';
											
											echo'<div id=otrosdatos><p id=nombre>Tipo Couch: '.$resultado["nombre"].'</p>';
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
				?>


	</body>
</html>