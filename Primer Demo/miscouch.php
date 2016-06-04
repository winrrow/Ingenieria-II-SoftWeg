<?php
include("conectar.php");
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
	  <link rel="stylesheet" href="styles/miscouch.css">
</head>
	<body id="color">		
			<div id="paisajemiperfil">
				<h1 id="tituloperfil"> Mis Couch </h1>
			</div>
			
			<?php  

				if($admin ==0){
					?>	
						<div id="botonesperfil">
								<a id="modificarperfil" href="modificarperfil.php" class="btn btn-success"> Modificar Perfil </a>
								
						</div>
				<?php
				}else{ 
					?>
						<div id="botonesperfilad">
								<a href="agregartipocouch.php" class="btn btn-success"> Administrar Tipos de Couch </a>
								<a href="modificarperfil.php" class="btn btn-success"> Modificar Perfil </a>

						</div>
				<?php
				}
			?>
				<?php
					$todos = mysql_query("SELECT * FROM couchs INNER JOIN tipo_couchs on couchs.id_tipo_couch=tipo_couchs.id_tipo_couch WHERE mail='$mail' ORDER BY couchs.id_couch DESC ");
					
					if( mysql_num_rows($todos) != 0){
							while($resultado=mysql_fetch_array($todos)){ 	
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
													echo'<p id=nomegusta>No Me Gusta: '.$resultado["nomegusta"].'</p></div>';
													
													echo'<p id=capacidad>Capacidad: '.$resultado["capacidad"].'</p>';
													echo'<p id=desc>Descripcion :'.$resultado["descripcion"].'</p>';
												echo "</div>";
												echo'<div id=boton><input type="hidden" name="id" value="'.$resultado["id_couch"].'">
														<input type="submit" id=editar  name="editar" value="editar">
														</div>';
												// <input type="submit" id=eliminar name="eliminar"  value="eliminar">			
									echo "</form>";
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