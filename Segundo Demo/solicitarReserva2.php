<?php  

/*
 *  NOTAS
 * 
 * 
    BBDD:

	Agregué campo "estado" varchar(25) que va a poder tomar 5 valores:
		- Esperando (Se envio la solicitud y todavía no hay respuesta)
 *              - Aceptado (cuando el HOST acepta la solicitud)
 *              - Rechazado (cuando el HOST rechaza la solicitud)
 *              - Cancelado_H (Por Host)
		- Cancelado_S (Por Solicitante)
 * 
 *      No sé si sería mejor con valores int (0,1,2,3,4) por cuestiones de eficiencia o no; pero en este caso no va a marcar ninguna diferencia.
 * 
 * 
 * 
 */


include("headconopcionesbackend.php");
include("conectar.php");
$mail=$_SESSION["mail"];


//llegan ok los post

$idcouch = $_POST['idcouch'];
$fInicio = $_POST['desdeR'];
$fFin   =  $_POST['hastaR'];

/*
echo $idcouch;
echo "<br>";
echo $fInicio;
echo "<br>";
echo $fFin;
echo "<br>";echo "<br>";
echo "TIRA ERRORES PERO REGISTRA LA RESERVA.. ES DECIR, ANDA BIEN";
*/

//Global $hay;
$hay = false;


         //   function queNoHayaReservasAceptadasEnEsasFechas(){
             
             

                

          //  } 
            
            


            
            
// queNoHayaReservasAceptadasEnEsasFechas();

                $reservas = mysql_query("SELECT * FROM reservas WHERE estado='Aceptado' AND id_couch='$idcouch'"
                        . "AND ((fecha_desde BETWEEN '$fInicio' AND '$fFin') OR (fecha_hasta BETWEEN '$fInicio' AND '$fFin'))",$con); 
                   // . " AND (fecha_desde>='$fechadesde' AND fecha_hasta<='$fechahasta')");
                        
                if ( mysql_num_rows ($reservas) > 0 ){
            
                    $hay=true;  //Hay reservas aceptadas en fechas que se pisen con el mismo couch
   
                ?>

                <script>    
                        alert('Ya hay una reserva aceptada para esas fechas. Por favor, intente nuevamente con otras fechas'); 
                        window.location="iniciobackend.php";
                </script>
                
                <?php
           
                
                }


if ($hay==false){

    //Si no hay reservas aceptadas en el mismo couch con fechas que se pisen, inserto
    $insertarReserva = mysql_query("INSERT INTO reservas(fecha_desde, fecha_hasta, mail, id_couch, estado) VALUES ('$fInicio','$fFin', '$mail', '$idcouch', 'Esperando')",$con);

    ?>
    <script>
        alert('Se ha registrado la solicitud de reserva correctamente. Usted será notificado en caso de que el anfitrión acepte');
        window.location="iniciobackend.php";
    </script>
    <?php



}
    else{
        
    ?>
    
    <script>
        alert('Ya existen reservas aceptadas para este couch en estas fechas. Por favor, intente nuevamente con otras fechas.'); 
        window.location="iniciobackend.php";
    </script>

    <?php
    }




/*
 Se registra la reserva con su 
 * fecha_inicio, 
 * fecha_fin, 
 * mail de la persona que solicitó,
 * id del couch solicitado
 * <y estado "Esperando"
*/