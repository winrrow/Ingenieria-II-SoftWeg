<?php  
include("headconopcionesbackend.php");
include("conectar.php");
$mail=$_SESSION["mail"];
?>
<html>
<head> 
	<title>Buscar Couch</title>
	 <meta charset="UTF-8">
	 <meta charset="ISO-8859-1">
	 <link rel="stylesheet" href="styles/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/resultadobusqueda.css">
</head>
	<body id="color">		
			<div id="paisajemiperfil">
				<h1 id="tituloperfil"> Resultados </h1>
			</div>
					<?php
					include("conectar.php");
					$titulo=$_POST['titulo'];
					$tipo=$_POST['tipo'];
					$capacidad=$_POST['capacidad'];

					if($titulo ==''){
						$filtrotitulo='1';
					}else{
						$filtrotitulo= "titulo LIKE '%$titulo%'";
					}

					if($tipo == "Cualquier"){
						$filtrotipo='1'; 
					}else{
						$filtrotipo= " $tipo = couchs.id_tipo_couch"; 
					}

					if($capacidad == 0){
						$filtrocapacidad='1';
					}else{
						$filtrocapacidad=" $capacidad = capacidad ";
					}
					
					if ( ( ($_POST['provincia'])!=-1 ) && ( ($_POST['ciudad']) != '') ){
						 $provincia=$_POST['provincia'];
						 $ciudad=$_POST['ciudad'];
						 $filtroprovincia= "'$provincia' = provincia"; 
						 $filtrociudad=  "'$ciudad' = ciudad";
					}else{
							if( ( ($_POST['provincia']) !=-1 ) ) {
								$provincia=$_POST['provincia'];
								$filtroprovincia = " '$provincia' = provincia"; 
								$filtrociudad= '1';
							}else{
								$filtroprovincia='1';
								$filtrociudad='1';
							}

					}
					if ( ( ($_POST['desde'])!= NULL ) && ( ($_POST['hasta']) != NULL ) ){
									$fechadesde=$_POST['desde'];
									$fechahasta=$_POST['hasta'];
									$filtrofecha= " fecha_desde >= '$fechadesde' AND fecha_hasta <= '$fechahasta'";	
						}else{
							if ( ( ($_POST['desde'])!= NULL ) && ( ($_POST['hasta']) == NULL ) ){
									$fechadesde=$_POST['desde'];
									$fechahasta ='';
									$filtrofecha= "fecha_desde >= '$fechadesde'";
							}else{
								if ( ( ($_POST['desde']) == NULL ) && ( ($_POST['hasta']) != NULL ) ){
									$fechadesde='';
									$fechahasta =$_POST['hasta'];
									$filtrofecha= "fecha_desde <= '$fechahasta'";	
							}else{
									if ( ( ($_POST['desde']) == NULL ) && ( ($_POST['hasta']) == NULL ) ){
									$fechadesde='';
									$fechahasta='';
									$filtrofecha='1';
							}
							}
							}
						}
						$filtroorden= " ORDER BY couchs.id_couch DESC";	

						?>
				<div id="criteriodebusqueda">
					<div>
						<h3 id="titulobusqueda">Usted buscó por los siguientes criterios </h3>
					</div>
					<label id="titulo">Titulo: <?php if($titulo==''){ echo "no buscó por ningun titulo";}else{ echo $titulo;}  ?> </label>
					<label id="tipo">Tipo de couch: <?php echo $tipo ?> </label>
					<label id="capacidad">Capacidad: <?php echo $capacidad ?> </label>
					<label id="provincia">Provinca:<?php if($_POST['provincia']!= -1){ echo $provincia;}else{echo "no buscó por ninguna provincia";} ?> </label>
					<label id="ciudad">Ciudad: <?php if($filtrociudad == 1){echo "no buscó por ninguna ciudad";}else{ echo $ciudad;} ?> </label>
					<label id="Fechadesde">Fecha Desde:<?php if($fechadesde==NULL){echo "no buscó por fecha desde";}else{ echo $fechadesde;} ?> </label>
					<label id="fechahasta">Fecha Hasta:<?php if($fechahasta==NULL){echo "no buscó por fecha hasta";}else{ echo $fechahasta;} ?> </label>
					
				</div>  
				<?php	
				  			

				  $buscar = mysql_query("SELECT * FROM couchs INNER JOIN tipo_couchs on tipo_couchs.id_tipo_couch=couchs.id_tipo_couch INNER JOIN usuarios on usuarios.mail=couchs.mail WHERE $filtrotitulo AND $filtrotipo AND $filtrocapacidad AND $filtrofecha  AND $filtroprovincia AND $filtrociudad AND couchs.baja_couch=0 $filtroorden");
					while($resultado=mysql_fetch_array($buscar)){ 	
							$fecha=date("d-m-Y",strtotime($resultado['fecha_desde'])); 
							$fecha1=date("d-m-Y",strtotime($resultado['fecha_hasta'])); 
							echo '<form action="modificarcouch.php"  method="POST">';
							 echo '<div id=imagen><img src="'.$resultado["fotocouch"].'"width=100% height=100%/></div>';
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
										echo'<div id=boton><input type="hidden" name="id" value="'.$resultado["id_couch"].'">';
										echo'<input type="submit" id=verDetalles name="verDetalles" value="Ver detalles" onclick=action="couch.php">
										</div>';
										
										//		<input type="submit" id=editar  name="editar" value="editar">
									//			<input type="submit" id=eliminar name="eliminar"  value="eliminar"></div>';	
								echo "</form>";
					}
				?>


	</body>
</html>