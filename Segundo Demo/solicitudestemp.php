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
	<title>Mis Solicitudes</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="styles/bootstrap.min.css">
	  <link rel="stylesheet" href="styles/miscouch.css">
</head>
	<body id="color">		
			<div id="paisajemiperfil">
				<h1 id="tituloperfil"> Mis Solicitudes </h1>
			</div>
			
			<?php  

				if($admin ==0){
					?>	
						<div id="botonesperfil">
								<a id="modificarperfil" href="modificarperfil.php" class="btn btn-success"> Modificar Perfil </a>
								<a id="modificarperfil" href="reservasaceptadas.php" class="btn btn-success"> Reservas que Acepté </a>
						</div>
				<?php
				}else{ 
					?>
						<div id="botonesperfilad">
								<a href="agregartipocouch.php" class="btn btn-success"> Administrar Tipos de Couch </a>
								<a href="modificarperfil.php" class="btn btn-success"> Modificar Perfil </a>
								<a id="modificarperfil" href="reservasaceptadas.php" class="btn btn-success"> Reservas que Acepté </a>

						</div>
				<?php
				}
			?>
				<?php
					$reservas = mysql_query("SELECT reservas.fecha_desde, reservas.fecha_hasta, reservas.estado, reservas.id_reserva, tipo_couchs.nombre_tipocouch, couchs.provincia, couchs.ciudad,couchs.fotocouch, couchs.titulo, couchs.descripcion,couchs.id_couch, couchs.megusta, couchs.capacidad, couchs.nomegusta, usuarios.nombre_usuario FROM reservas INNER JOIN couchs on reservas.id_couch=couchs.id_couch INNER JOIN tipo_couchs on couchs.id_tipo_couch=tipo_couchs.id_tipo_couch INNER JOIN usuarios on reservas.mail=usuarios.mail WHERE couchs.mail='$mail' AND reservas.estado='Esperando' ORDER BY couchs.id_couch DESC ");
					if( mysql_num_rows($reservas) != 0){
							while($resultado=mysql_fetch_array($reservas)){ 	
									$fecha=date("d-m-Y",strtotime($resultado['fecha_desde'])); 
									$fecha1=date("d-m-Y",strtotime($resultado['fecha_hasta'])); 
									echo '<form  method="POST">';
									 echo '<div id=imagen><img src="'.$resultado["fotocouch"].'"width=100% height=100%/></div>';
												echo "<div id=info>";	
													echo'<p>Titulo: '.$resultado["titulo"].'</p>';	
													echo'<p id=provincia>Provincia: '.$resultado["provincia"].'</p>';
													echo'<p name="fechadesde" id=fechadesde>Fecha Desde: '.$fecha.'</p>';
													echo'</br></br><div id=otrosdatos><p id=nombre>Tipo Couch: '.$resultado["nombre_tipocouch"].'</p>';
													echo'<p id=ciudad>Ciudad: '.$resultado["ciudad"].'</p>';
													echo'<p name="hasta" id=hasta>Fecha Hasta: '.$fecha1.'</p>';;
													echo'<p id=nomegusta>Me Gusta: '.$resultado["megusta"].'</p>';
													echo'<p id=megusta>No me Gusta: '.$resultado["nomegusta"].'</p>
													</div>';
													echo'<p id=megusta>Solicitante: '.$resultado["nombre_usuario"].'</p>
													</div>';
                                                                                                			
												echo "</div>";
												//agregar hidden para id_couch
												echo'<div id=boton><input type="hidden" name="idreserva" value="'.$resultado["id_reserva"].'">


														<input type="submit" id=verDetalles  name="AceptarReserva" onclick=action="aceptarreserva.php" value="Aceptar Reserva">
											                   <input type="submit" id=editar onclick=action="rechazarreserva.php"  name="RechazarReserva" value="Rechazar Reserva">
                                                                                                                
														</div>';	
                                                                                                
									echo "</form>";
							}
					}else{
						?> 
						 <script>
        						alert('No hay Solicitudes de Couch por Aceptar o Rechazar');
    					</script>
						
					<?php 
						}
				?>

	</body>
</html>