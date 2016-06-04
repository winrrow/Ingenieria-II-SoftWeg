<?php
include("conectar.php");
include("headconopcionesbackend.php");
$mail=$_SESSION["mail"];  
		       	$sql= mysql_query("SELECT * FROM usuarios  WHERE mail='$mail'",$con);
						while($row = mysql_fetch_array($sql)){
						$nombre=$row["nombre_usuario"];
						$apellido=$row["apellido"];
						$pais=$row["pais"];
						$descripcion=$row["descripcion"];
					}
							
?>
<html>
    <head>
        <title>CouchInn - Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles/modificarmiperfil.css">
    </head>
    <body>
        
    
        <div class ="container">
            
            
      <form class="form-signin" method="POST"  action="actualizarperfil.php"  enctype="multipart/form-data">
		        <h2 class="form-signin-heading" id="modificarperfil">Modificar Perfil</h2>
		        
		       <div id="infoperfil"> 
			       
					<span class="textInput" id="mailspan">Mail</span>
			        <span><input class="form-control textInput2" name="mail" value= <?php echo $mail ?> required="" autofocus="" type="email" id="mailRegistro"></span>
			        
			        <p class="textInput" id="pnombre">Nombre</p>
			        <input class="form-control textInput2" name="nombre" id="nombre" value=<?php echo $nombre ?> required="" type="text">

			        
			        <p class="textInput" id="papellido">Apellido</p>
			        <input class="form-control textInput2"name="apellido" id="apellido" value=<?php echo $apellido ?> required="" type="text">

			        <p class="textInput" id="ppais">Pais</p>
			        <select class="form-control textInput2"name="pais" style="width: 50%">
			        <option value="Afganistán">Afganistán</option>
			        <option value="Albania">Albania</option>
			        <option value="Alemania">Alemania</option>
			        <option value="Andorra">Andorra</option>
			        <option value="Angola">Angola</option>
			        <option value="Anguilla">Anguilla</option>
			        <option value="Antártida">Antártida</option>
			        <option value="Antigua y Barbuda">Antigua y Barbuda</option>
			        <option value="Antillas Holandesas">Antillas Holandesas</option>
			        <option value="Arabia Saudita">Arabia Saudita</option>
			        <option value="Argelia">Argelia</option>
			        <option value="Argentina" selected>Argentina</option>
			        <option value="Armenia">Armenia</option>
			        <option value="Aruba">Aruba</option>
			        <option value="Australia">Australia</option>
			        <option value="Austria">Austria</option>
			        <option value="Azerbaiyán">Azerbaiyán</option>
			        <option value="Bahamas">Bahamas</option>
			        <option value="Bahrein">Bahrein</option>
			        <option value="Bangladesh">Bangladesh</option>
			        <option value="Barbados">Barbados</option>
			        <option value="Bélgica">Bélgica</option>
			        <option value="Belice">Belice</option>
			        <option value="Benin">Benin</option>
			        <option value="Bermudas">Bermudas</option>
			        <option value="Bielorrusia">Bielorrusia</option>
			        <option value="Birmania">Birmania</option>
			        <option value="Bolivia">Bolivia</option>
			        <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
			        <option value="Botswana">Botswana</option>
			        <option value="Brasil">Brasil</option>
			        <option value="Brunei">Brunei</option>
			        <option value="Bulgaria">Bulgaria</option>
			        <option value="Burkina Faso">Burkina Faso</option>
			        <option value="Burundi">Burundi</option>
			        <option value="Bután">Bután</option>
			        <option value="Cabo Verde">Cabo Verde</option>
			        <option value="Camboya">Camboya</option>
			        <option value="Camerún">Camerún</option>
			        <option value="Canadá">Canadá</option>
			        <option value="Chad">Chad</option>
			        <option value="Chile">Chile</option>
			        <option value="China">China</option>
			        <option value="Chipre">Chipre</option>
			        <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
			        <option value="Colombia">Colombia</option>
			        <option value="Comores">Comores</option>
			        <option value="Congo">Congo</option>
			        <option value="Corea del Norte">Corea del Norte</option>
			        <option value="Corea del Sur">Corea del Sur</option>
			        <option value="Costa de Marfíl">Costa de Marfíl</option>
			        <option value="Costa Rica">Costa Rica</option>
			        <option value="Croacia">Croacia</option>
			        <option value="Cuba">Cuba</option>
			        <option value="Dinamarca">Dinamarca</option>
			        <option value="Djibouti">Djibouti</option>
			        <option value="Dominica">Dominica</option>
			        <option value="Ecuador">Ecuador</option>
			        <option value="Egipto">Egipto</option>
			        <option value="El Salvador">El Salvador</option>
			        <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
			        <option value="Eritrea">Eritrea</option>
			        <option value="Eslovaquia">Eslovaquia</option>
			        <option value="Eslovenia">Eslovenia</option>
			        <option value="España">España</option>
			        <option value="Estados Unidos">Estados Unidos</option>
			        <option value="Estonia">Estonia</option>
			        <option value="Etiopía">Etiopía</option>
			        <option value="Fiji">Fiji</option>
			        <option value="Filipinas">Filipinas</option>
			        <option value="Finlandia">Finlandia</option>
			        <option value="Francia">Francia</option>
			        <option value="Gabón">Gabón</option>
			        <option value="Gambia">Gambia</option>
			        <option value="Georgia">Georgia</option>
			        <option value="Ghana">Ghana</option>
			        <option value="Gibraltar">Gibraltar</option>
			        <option value="Granada">Granada</option>
			        <option value="Grecia">Grecia</option>
			        <option value="Groenlandia">Groenlandia</option>
			        <option value="Guadalupe">Guadalupe</option>
			        <option value="Guam">Guam</option>
			        <option value="Guatemala">Guatemala</option>
			        <option value="Guayana">Guayana</option>
			        <option value="Guayana Francesa">Guayana Francesa</option>
			        <option value="Guinea">Guinea</option>
			        <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
			        <option value="Guinea-Bissau">Guinea-Bissau</option>
			        <option value="Haití">Haití</option>
			        <option value="Honduras">Honduras</option>
			        <option value="Hungría">Hungría</option>
			        <option value="India">India</option>
			        <option value="Indonesia">Indonesia</option>
			        <option value="Irak">Irak</option>
			        <option value="Irán">Irán</option>
			        <option value="Irlanda">Irlanda</option>
			        <option value="Islandia">Islandia</option>
			        <option value="Islas Caimán">Islas Caimán</option>
			        <option value="Islas Cook">Islas Cook</option>
			        <option value="Islas de Cocos">Islas de Cocos</option>
			        <option value="Islas Faroe">Islas Faroe</option>
			        <option value="Islas Malvinas">Islas Malvinas</option>
			        <option value="Islas Marshall">Islas Marshall</option>
			        <option value="Islas Palau">Islas Palau</option>
			        <option value="Islas Salomón">Islas Salomón</option>
			        <option value="Islas Tokelau">Islas Tokelau</option>
			        <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
			        <option value="Islas Vírgenes">Islas Vírgenes (Reino Unido)</option>
			        <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
			        <option value="Israel">Israel</option>
			        <option value="Italia">Italia</option>
			        <option value="Jamaica">Jamaica</option>
			        <option value="Japón">Japón</option>
			        <option value="Jordania">Jordania</option>
			        <option value="Kazajistán">Kazajistán</option>
			        <option value="Kenia">Kenia</option>
			        <option value="Kirguizistán">Kirguizistán</option>
			        <option value="Kiribati">Kiribati</option>
			        <option value="Kuwait">Kuwait</option>
			        <option value="Laos">Laos</option>
			        <option value="Lesotho">Lesotho</option>
			        <option value="Letonia">Letonia</option>
			        <option value="Líbano">Líbano</option>
			        <option value="Liberia">Liberia</option>
			        <option value="Libia">Libia</option>
			        <option value="Liechtenstein">Liechtenstein</option>
			        <option value="Lituania">Lituania</option>
			        <option value="Luxemburgo">Luxemburgo</option>
			        <option value="Macedonia">Macedonia</option>
			        <option value="Madagasca">Madagascar</option>
			        <option value="Malasia">Malasia</option>
			        <option value="Malawi">Malawi</option>
			        <option value="Maldivas">Maldivas</option>
			        <option value="Mali">Malí</option>
			        <option value="Malta">Malta</option>
			        <option value="Marruecos">Marruecos</option>
			        <option value="Martinica">Martinica</option>
			        <option value="Mauricio">Mauricio</option>
			        <option value="Mauritania">Mauritania</option>
			        <option value="México">México</option>
			        <option value="Micronesia">Micronesia</option>
			        <option value="Moldavia">Moldavia</option>
			        <option value="Mónaco">Mónaco</option>
			        <option value="Mongolia">Mongolia</option>
			        <option value="Montserrat">Montserrat</option>
			        <option value="Mozambique">Mozambique</option>
			        <option value="Namibia">Namibia</option>
			        <option value="Nauru">Nauru</option>
			        <option value="Nepal">Nepal</option>
			        <option value="Nicaragua">Nicaragua</option>
			        <option value="Níger">Níger</option>
			        <option value="Nigeria">Nigeria</option>
			        <option value="Niue">Niue</option>
			        <option value="Norfolk">Norfolk</option>
			        <option value="Noruega">Noruega</option>
			        <option value="Nueva Caledonia">Nueva Caledonia</option>
			        <option value="Nueva Zelanda">Nueva Zelanda</option>
			        <option value="Omán">Omán</option>
			        <option value="Países Bajos">Países Bajos</option>
			        <option value="Panamá">Panamá</option>
			        <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
			        <option value="Paquistán">Paquistán</option>
			        <option value="Paraguay">Paraguay</option>
			        <option value="Perú">Perú</option>
			        <option value="Polinesia Francesa">Polinesia Francesa</option>
			        <option value="Polonia">Polonia</option>
			        <option value="Portugal">Portugal</option>
			        <option value="Puerto Rico">Puerto Rico</option>
			        <option value="Qatar">Qatar</option>
			        <option value="Reino Unido">Reino Unido</option>
			        <option value="República Centroafricana">República Centroafricana</option>
			        <option value="República Checa">República Checa</option>
			        <option value="República Dominicana">República Dominicana</option>
			        <option value="Reunión">Reunión</option>
			        <option value="Ruanda">Ruanda</option>
			        <option value="Rumania">Rumania</option>
			        <option value="Rusia">Rusia</option>
			        <option value="Sahara Occidental">Sahara Occidental</option>
			        <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
			        <option value="Samoa">Samoa</option>
			        <option value="Samoa Americana">Samoa Americana</option>
			        <option value="San Marino">San Marino</option>
			        <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
			        <option value="Santa Helena">Santa Helena</option>
			        <option value="Santa Lucía">Santa Lucía</option>
			        <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
			        <option value="Senegal">Senegal</option>
			        <option value="Seychelles">Seychelles</option>
			        <option value="Sierra Leona">Sierra Leona</option>
			        <option value="Singapur">Singapur</option>
			        <option value="Siria">Siria</option>
			        <option value="Somalia">Somalia</option>
			        <option value="Sri Lanka">Sri Lanka</option>
			        <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
			        <option value="Suazilandia">Suazilandia</option>
			        <option value="Sudáfrica">Sudáfrica</option>
			        <option value="Sudán">Sudán</option>
			        <option value="Suecia">Suecia</option>
			        <option value="Suiza">Suiza</option>
			        <option value="Surinam">Surinam</option>
			        <option value="Tailandia">Tailandia</option>
			        <option value="Taiwán">Taiwán</option>
			        <option value="Tanzania">Tanzania</option>
			        <option value="Tayikistán">Tayikistán</option>
			        <option value="Timor Orienta">Timor Oriental</option>
			        <option value="Togo">Togo</option>
			        <option value="Tonga">Tonga</option>
			        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
			        <option value="Túnez">Túnez</option>
			        <option value="Turkmenistán">Turkmenistán</option>
			        <option value="Turquía">Turquía</option>
			        <option value="Tuvalu">Tuvalu</option>
			        <option value="Ucrania">Ucrania</option>
			        <option value="Uganda">Uganda</option>
			        <option value="Uruguay">Uruguay</option>
			        <option value="Uzbekistán">Uzbekistán</option>
			        <option value="Vanuatu">Vanuatu</option>
			        <option value="Venezuela">Venezuela</option>
			        <option value="Vietnam">Vietnam</option>
			        <option value="Yemen">Yemen</option>
			        <option value="Zambia">Zambia</option>
			        <option value="Zimbabue">Zimbabue</option>
			        </select>

			        <p class="textInput" id="info">Información sobre usted</p>
			        <div id="informacion">
	    				<label class="control-label col-xs-2"></label>
	    					<textarea class="form-control-text" rows="6" cols="60" name='textarea'><?php echo $descripcion?></textarea>
	    			</div>		
			        
			        <div>
				        <span><p class="textInput" id="sexo">Sexo</p></span>
				        <span style="width:10%;"> <input type="radio" name="genero" value="male" checked class="textInput3"> Hombre </span>
				        <span style="width:10%;"> <input type="radio" name="genero" value="female" class="textInput3"> Mujer<br></span>
			        </div>
			              
			        <div class="fotoPremiumAltaCoach" >
	            			<input name="foto" id="foto" type="file">
	        		</div>

			       	 <a id="miperfil" href="miperfil.php" class="btn btn-lg btn-success btn-blockx"> Mi perfil </a>
			         <button class="btn btn-lg btn-success btn-blockx" id="modificar" type="submit" onclick="window.location=miperfil.php">Modificar Perfil</button>
    			</div>
    			<div id="fotofondo">
    				
    			</div>
    </form>
    </div>
    </body>
</html>
