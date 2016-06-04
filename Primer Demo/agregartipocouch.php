<?php
include("conectar.php");
include("headconopcionesbackend.php");
$mail=$_SESSION['mail'];
 ?>
 <html>
    <head>
        <title>Publicar un Couch - CouchInn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="styles/agregartipocouch.css">
    </head>
    <body>  
		    <div id="tituloPublicarCouch">Administrar tipos de couch</div>
		    <div id="container" class ="container">
		          <div id="container2"> 
						   <div id="formbot">  
									<div id="izquierdo">     
									     <form class="form-signin" method="POST" id="formagregar" name="formularioderegistro" action="abmtipocouch.php">  
										      <input  name="nombreagregar" placeholder="Escribe el tipo de couch" id="input"  type="text">
										      <button class="btn btn-md btn-success btn-blockx" id="enviarRegistro" type="submit" onclick="window.location=inicio.php">Agregar</button>
									     </form> 
								     	
									   		 <?php 	
										      	$sql=mysql_query("SELECT * FROM tipo_couchs",$con);
												while($row = mysql_fetch_array($sql)){
													$habilitado=$row['habilitado'];
													if($habilitado == 'si'){	
														echo '<form action="abmtipocouch.php" style=width:100% method="POST">';
															echo'<td style=width40%><input type="text" id="agregar" style=width:40% name="nombre" value="'.$row["nombre_tipocouch"].'"/></td>';
															echo'<td>
															<input type="hidden" name="id" value="'.$row["id_tipo_couch"].'">
															<input type="submit" style=width:10% name="editar" value="editar">&nbsp&nbsp&nbsp&nbsp
															<input type="submit" style=width:20% name="deshabilitar"  value="deshabilitar"></td>';
														echo "</form>";
													}
												}?>
									</div>			
									<div id="derecho">	     
											<?php
											    $sql=mysql_query("SELECT * FROM tipo_couchs",$con);
												while($row = mysql_fetch_array($sql)){
													$habilitado=$row['habilitado'];
													if($habilitado == 'no'){	
														echo '<form action="abmtipocouch.php" method="POST">';
															echo'<td><input type="text"style=width:40%  name="nombre" value="'.$row["nombre_tipocouch"].'"/></td>';
															echo'<td>
															<input type="hidden" name="id" value="'.$row["id_tipo_couch"].'">
															<input type="submit" name="eliminar" value="eliminar">&nbsp&nbsp&nbsp&nbsp
															<input type="submit" name="habilitar"  value="habilitar"></td>';
														echo "</form>";
													}
												}
								      		?>
				   					</div>
				   			</div>
		    </div>
     </body>
</html>