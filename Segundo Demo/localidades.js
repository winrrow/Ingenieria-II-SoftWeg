
var provincias = new Array("Buenos Aires", "Capital Federal", "Catamarca", "Chaco", "Chubut", "Córdoba", "Corrientes", "Entre Ríos", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquen", "Rio Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego", "Tucumán");

// States
var s_a = new Array();
s_a[0]="";
s_a[1]="Adolfo Alsina|Adolfo Gonzales Chaves|Alberti|Almirante Brown|Arrecifes|Avellaneda|Ayacucho|Azul|Bahía Blanca|Balcarce|Baradero|Benito Juárez|Berazategui|Berisso|Bolívar|Bragado|Brandsen|Campana|Cañuelas|Capitán|Sarmiento|Carlos Casares|Carlos Tejedor|Carmen de Areco|Castelli|Chacabuco|Chascomús|Chivilcoy|Colón|Coronel de Marina Leonardo Rosales|Coronel Dorrego|Coronel Pringles|Coronel Suárez|Daireaux|Dolores|Ensenada|Escobar|Esteban Echeverría|Exaltación de la Cruz|Ezeiza|Florencio Varela|Florentino Ameghino|General Alvarado|General Alvear|General Arenales|General Belgrano|General Guido|General Juan Madariaga|General La Madrid|General Las Heras|General Lavalle|General Paz|General Pinto|General Pueyrredón|General Rodríguez|General San Martín|General Viamonte|General Villegas|Guaminí|Hipólito Yrigoyen|Hurlingham|Ituzaingó|José C. Paz|Junín|La Costa|La Matanza|La Plata|Lanús|Laprida|Las Flores|Leandro N. Alem|Lezama|Lincoln|Lobería|Lobos|Lomas de Zamora|Luján|Magdalena|Maipú|Malvinas Argentinas|Mar Chiquita|Marcos Paz|Mercedes|Merlo|Monte|Monte Hermoso|Moreno|Morón|Navarro|Necochea|Nueve de Julio|Olavarría|Patagones|Pehuajó|Pellegrini|Pergamino|Pila|Pilar|Pinamar|Presidente Perón|Puan|Punta Indio|Quilmes|Ramallo|Rauch|Rivadavia|Rojas|Roque Pérez|Saavedra|Saladillo|Salliqueló|Salto|San Andrés de Giles|San Antonio de Areco|San Cayetano|San Fernando|San Isidro|San Miguel|San Nicolás|San Pedro|San Vicente|Suipacha|Tandil|Tapalqué|Tigre|Tordillo|Tornquist|Trenque Lauquen|Tres Arroyos|Tres de Febrero|Tres Lomas|Veinticinco de Mayo|Vicente López|Villa Gesell|Villarino|Zárate";
s_a[2]="Agronomía|Almagro|Balvanera|Barracas|Belgrano|Boedo|Caballito|Chacarita|Coghlan|Colegiales|Constitución|Flores|Floresta|La Boca|La Paternal|Liniers|Mataderos|Monte Castro|Montserrat|Nueva Pompeya|Nuñez|Palermo|Parque Avellaneda|Parque Chacabuco|Parque Chas|Parque Patricios|Puerto Madero|Recoleta|Retiro|Saavedra|San Cristóbal|San Nicolás|San Telmo|Versalles|Villa Crespo|Villa Devoto|Villa General Mitre|Villa Lugano|Villa Luro|Villa Ortúzar|Villa Pueyrredón|Villa Real|Villa Riachuelo|Villa Santa Rita|Villa Soldati|Villa Urquiza|Villa del Parque|Vélez Sarsfield";
s_a[3]="Ambato|Ancasti|Andalgalá|Antofagasta de la Sierra|Belén|Capayán|Catamarca|El Alto|Fray Mamerto Esquiú|La Paz|Paclín|Pomán|Santa María|Santa Rosa|Tinogasta|Valle Viejo";
s_a[4]="Aviá Teraí|Barranqueras|Campo Largo|Charata|Concepción del Bermejo|Coronel Du Graty|Corzuela|Fontana|General José de San Martín|General Pinedo|Hermoso Campo|Juan José Castelli|La Escondida|La Leonesa|Las Breñas|Las Palmas|Machagai|Makallé|Miraflores|Pampa del Indio|Pampa del Infierno|Presidencia de la Plaza|Presidencia Roque Sáenz Peña|Puerto Tirol|Puerto Vilelas|Quitilipi|Resistencia|San Bernardo|Santa Sylvina";
s_a[5]="Alto Río Senguer|Camarones|Cholila|Comodoro Rivadavia|Corcovado|Dolavon|El Hoyo|El Maitén|Epuyén|Esquel|Gaiman|Gobernador Costa|José de San Martín|Lago Puelo|Puerto Madryn|Rada Tilly|Rawson|Río Mayo|Río Pico|Sarmiento|Tecka|Trelew|Trevelin";
s_a[6]="Alta Gracia|Arroyito|Bell Ville|Córdoba|Cosquín|Cruz del Eje|Deán Funes|Jesús María|La Calera|Laboulaye|Marcos Juárez|Morteros|Río Ceballos|Río Cuarto|Río Segundo|Río Tercero|San Francisco|Unquillo|Villa Allende|Villa Carlos Paz|Villa Dolores|Villa María|Villa Nueva";
s_a[7]="Bella Vista|Caá Catí|Ciudad de Corrientes|Concepción|Curuzú Cuatiá|Empedrado|Esquina|Felipe Yofre|General Alvear|Gobernador Ingeniero Valentín Virasoro|Goya|Itá Ibaté|Itatí|Ituzaingó|La Cruz|Lavalle|Mburucuyá|Mercedes|Mocoretá|Monte Caseros|Paso de la Patria|Paso de los Libres|Saladas|San Cosme|San Luis del Palmar|San Roque|Santa Lucía|Santa Rosa|Santo Tomé|Sauce";
s_a[8]="Basavilbaso|Brazo Largo|Caseros|Cerrito|Chajarí|Colón|Concepción del Uruguay|Concordia|Crespo|Diamante|Federación|Federal|Feliciano|General Ramirez|Gualeguay|Gualeguaychú|Hernandarias|Ibicuy|La Paz|Larroque|Lib. San Martín|Liebig|Lucas González|María Grande|Nogoyá|Oro Verde|Paraná|Piedras Blancas|Pueblo Belgrano|Pueblo Brugo|Puerto Yeruá|Rosario del Tala|San José|San Salvador|Santa Ana|Santa Elena|Ubajay|Urdinarrain|Valle María|Viale|Victoria|Villa Elisa|Villa Paranacito|Villa Urquiza|Villaguay";
s_a[9]="Clorinda|Formosa|El Colorado|Ibarreta|Ingeniero Juárez|Laguna Blanca|Las Lomitas|Pirané|Comandante Fontana";
s_a[10]="Abra Pampa|Caimancito|Calilegua|El Aguilar|El Carmen|El Talar|Fraile Pintado|Humahuaca|La Esperanza|La Mendieta|La Quiaca|Libertador General San Martín (Ledesma)|Monterrico|Palma Sola|Palpalá|Ciudad Perico|San Pedro de Jujuy|San Salvador de Jujuy|Santa Clara|Tilcara|Yuto";
s_a[11]="Abramo|Alpachiri|Alta Italia|Anguil|Arata|Ataliva Roca|Bernardo Larroudé|Bernasconi|Caleufú|Carro Quemado|Catriló|Ceballos|Colonia Barón|Conhelo|Coronel Hilario Lagos|Doblas|Eduardo Castex|Embajador Martini|General Acha|General Manuel Campos|General Pico|General San Martín|Guatraché|Ingeniero Luiggi|Intendente Alvear|Jacinto Aráuz|La Adela|La Humada|La Maruja|Lonquimay|Luan Toro|Macachín|Mauricio Mayer|Metileo|Miguel Cané|Miguel Riglos|Monte Nievas|Parera|Puelches|Puelén|Quehué|Quemú Quemú|Rancul|Realicó|Rolón|Santa Isabel|Santa Rosa|Santa Teresa|Telén|Toay|Tomás Manuel de Anchorena|Trenel|Uriburu|Veinticinco de Mayo|Vértiz|Victorica|Villa Mirasol|Winifreda";
s_a[12]="Arauco|Castro Barros|Chamical|Chilecito|Gral Quiroga|Coronel Felipe Varela|Famatina|General Ángel Vicente Peñaloza|General Belgrano|General Juan Facundo Quiroga|General Lamadrid|General Ocampo|General San Martín|Independencia|La Rioja|Rosario Vera Peñaloza|San Blas de los Sauces|Sanagasta";
s_a[13]="General Alvear|Godoy Cruz|Guaymallén|Junín|La Paz|Las Heras|Lavalle|Luján de Cuyo|Maipú|Malargüe|Mendoza|Rivadavia|San Carlos|San Martín|San Rafael|Santa Rosa|Tunuyán|Tupungato";
s_a[14]="25 de Mayo|Apóstoles|Aristóbulo del Valle|Campo Grande|Colonia Wanda|Comandante Andresito|El Soberbio|Eldorado|Garupá|Jardín América|Leandro N. Alem|Montecarlo|Oberá|Posadas|Puerto Esperanza|Puerto Iguazú|Puerto Rico|San Pedro|San Vicente";
s_a[15]="Aluminé|Andacollo|Añelo|Bajada del Agrio|Barrancas|Buta Ranquil|Caviahue-Copahue|Centenario|Chos Malal|Cutral-Co|El Cholar|El Huecú|Huinganco|Junín de los Andes|Las Coloradas|Las Lajas|Las Ovejas|Loncopué|Los Miches|Mariano Moreno|Neuquén|Picún Leufú|Piedra del Águila|Plaza Huincul|Plottier|Rincón de los Sauces|San Martín de los Andes|San Patricio del Chañar|Senillosa|Taquimilán|Tricao Malal|Villa El Chocón|Villa La Angostura|Villa Pehuenia|Vista Alegre|Zapala";
s_a[16]="Allen|Campo Grande|Catriel|Cervantes|Chichinales|Chimpay|Choele Choel|Cinco Saltos|Cipolletti|Comallo|Contralmirante Cordero|Coronel Belisle|Darwin|Dina Huapi|El Bolsón|General Conesa|General Enrique Godoy|General Fernández Oro|General Roca|Ingeniero Jacobacci|Ingeniero Luis A. Huergo|Lamarque|Los Menucos|Luis Beltrán|Mainqué|Maquinchao|Pilcaniyeu|Pomona|Río Colorado|San Antonio Oeste|San Carlos de Bariloche|Sierra Colorada|Sierra Grande|Valcheta|Viedma|Villa Regina";
s_a[17]="Aguaray|Apolinario Saravia|Cafayate|Campo Quijano|Campo Santo|Cerrillos|Chicoana|Colonia Santa Rosa|El Bordo|El Carril|El Galpón|El Quebrachal|Embarcación|General Güemes|General Mosconi|Hipólito Yrigoyen (Tabacal)|Joaquín V. González|La Merced|Las Lajitas|Pichanal|Profesor Salvador Mazza (Pocitos)|Rivadavia Banda Norte (Coronel Juan Solá)|Rivadavia Banda Sur (Rivadavia)|Rosario de la Frontera|Rosario de Lerma|Salta|San José de Metán|San Ramón de la Nueva Orán|Santa Victoria Este|Santa Victoria Oeste|Tartagal";
s_a[18]="Albardón|Angaco|Calingasta|Caucete|Chimbas|Iglesia|Jáchal|Nueve de Julio|Pocito|Rawson|Rivadavia|San Juan|San Martín|Santa Lucía|Sarmiento|Ullum|Valle Fértil|Veinticinco de Mayo|Zonda";
s_a[19]="Buena Esperanza|Candelaria|Concarán|Juana Koslay|Justo Daract|La Toma|Luján|Merlo|Naschel|Quines|San Francisco del Monte de Oro|San Luis|San Martín|Santa Rosa del Conlara|Tilisarao|Unión|Villa General Roca|Villa Mercedes";
s_a[20]="Caleta Olivia|Comandante Luis Piedrabuena|El Calafate|El Chaltén|Gobernador Gregores|Las Heras|Los Antiguos|Perito Moreno|Pico Truncado|Puerto Deseado|Puerto San Julián|Puerto Santa Cruz|Río Gallegos|Río Turbio|Veintiocho de Noviembre";
s_a[21]="Armstrong|Arroyo Seco|Avellaneda|Calchaquí|Cañada de Gómez|Capitán Bermúdez|Carcarañá|Casilda|Ceres|Coronda|El Trébol|Esperanza|Firmat|Florencia|Fray Luis Beltrán|Frontera|Funes|Gálvez|Granadero Baigorria|Laguna Paiva|Las Parejas|Las Rosas|Las Toscas|Malabrigo|Pérez|Puerto General San Martín|Rafaela|Reconquista|Recreo|Roldán|Romang|Rosario|Rufino|San Carlos Centro|San Cristóbal|San Genaro|San Guillermo|San Javier|San Jorge|San José del Rincón|San Justo|San Lorenzo|Santa Fe|Santo Tomé|Sastre|Suardi|Sunchales|Tostado|Totoras|Venado Tuerto|Vera|Villa Cañás|Villa Constitución|Villa Gobernador Gálvez|Villa Ocampo";
s_a[22]="Añatuya|Bandera|Beltrán|Campo Gallo|Clodomira|Colonia Dora|Fernández|Frías|Ingeniero Forres|La Banda|Loreto|Los Juríes|Los Telares|Monte Quemado|Nueva Esperanza|Pampa de los Guanacos|Pinto|Pozo Hondo|Quimilí|San Pedro de Guasayán|Santiago del Estero|Selva|Sumampa|Suncho Corral|Termas de Río Hondo|Tintina|Villa Atamisqui|Villa Ojo de Agua";
s_a[23]="Rio Grande|Tolhuin|Ushuaia";
s_a[24]="Aguilares|Alderetes|Banda del Río Salí|Bella Vista|Burruyacú|Concepción|Famaillá|Graneros|Juan Bautista Alberdi|La Cocha|Las Talitas|Monteros|San Isidro de Lules|San Miguel de Tucumán|Simoca|Tafí del Valle|Tafí Viejo|Trancas|Yerba Buena";




function localidades( provinciaID, ciudadId ){
	
	var selectedCountryIndex = document.getElementById( provinciaID ).selectedIndex;

	var stateElement = document.getElementById( ciudadId );
	
	stateElement.length=0;	// Fixed by Julian Woods
	stateElement.options[0] = new Option('Elegí tu Ciudad','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedCountryIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function listarProvincias(provinciaID, ciudadId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(provinciaID);
	countryElement.length=0;
	countryElement.options[0] = new Option('Elegí tu Provincia','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<provincias.length; i++) {
		countryElement.options[countryElement.length] = new Option(provincias[i],provincias[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( ciudadId ){
		countryElement.onchange = function(){
			localidades( provinciaID, ciudadId );
		};
	}
}