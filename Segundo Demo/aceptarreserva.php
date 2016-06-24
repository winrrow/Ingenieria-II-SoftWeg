<?php

include("headconopcionesbackend.php");
include("conectar.php");

$verdadero=1;

//Funcionan ok los POST

$idreserva=$_POST["idreserva"]; 
$idcouch=$_POST["idcouch"]; 
$fechadesde=$_POST["fechadesde"];  // fechadesde de la reserva que hicieron clic en aceptar 
$fechahasta=$_POST["hasta"];       // fechahasta de la reserva que hicieron clic en aceptar

//Convierto las fechas a formato Y-m-d para que sea posible compararlas en las consultas a la base de datos

$fechadesde= date('Y-m-d',strtotime($fechadesde));
$fechahasta= date("Y-m-d",strtotime($fechahasta));             

            
            $sql2= mysql_query("UPDATE reservas SET estado='Aceptado' WHERE id_reserva='$idreserva'",$con); //no encontro que se pisen fechas
         
            
       
            //Rechazamos todas las demas que haya en esas fechas    
            
            $rechazar= mysql_query("UPDATE reservas SET estado='Rechazado' WHERE estado='Esperando' "
                    . "AND id_couch='$idcouch'" 
                    . "AND ((fecha_desde BETWEEN '$fechadesde' AND '$fechahasta') OR (fecha_hasta BETWEEN '$fechadesde' AND '$fechahasta'))",$con); 
            
            // . "AND ($fechadesde BETWEEN fecha_desde and fecha_hasta) OR ($fechahasta BETWEEN fecha_desde and fecha_hasta)",$con); 
            // . "AND (fecha_desde BETWEEN '$fechadesde' AND '$fechahasta') OR (fecha_hasta BETWEEN '$fechadesde' AND 
            
            ?>
            <script>
                    alert("Reserva aceptada. Será rechazada toda otra solicitud para estas fechas para este couch");
                window.location="solicitudes.php";
                
            </script>
            

       <?php    
       
       
       
       /*
        *
        $aceptar= mysql_query("SELECT fecha_desde, fecha_hasta FROM reservas WHERE id_couch='$idcouch' AND estado='Aceptado'",$con);
                        //filtro por ID couch para ver las reservas que ya tiene ese cocuch.

if( mysql_num_rows($aceptar) != 0)   // si tiene las proceso y me fijo si hay alguna reserva en el rango
{        
    while($resultado=mysql_fetch_array($aceptar))
    {

  		  if (!(  ( ($fechadesde<$resultado["fecha_desde"]) AND ($fechahasta<=$resultado["fecha_desde"])) OR ($fechadesde>=$resultado["fecha_hasta"]) ) )  //puede que haya otros casos, puse not para buscar donde estaria bien.., si no esta bien pone verdadero en 0.
        		{
        			$verdadero=false;
        		}
	  }

	if ($verdadero)
    {
        * 
        * 
        * 
        * 
        * 
        * 
        * 
        * 
        * 
        * 
        * 
        * 
        *  $reservas= mysql_query("SELECT fecha_desde, fecha_hasta FROM reservas WHERE id_couch='$idcouch'",$con);
         
            while($resultado=mysql_fetch_array($reservas)){
            
                
            }    
                
        * 
        */
       
       
      




