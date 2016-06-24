<?php

include("headconopcionesbackend.php");
include("conectar.php");
$idreserva=$_POST["idreserva"]; 
$idcouch=$_POST["idcouch"]; // NO LO TOMA Y FALTA AGREGAR EL HIDDEN EN SOLICITUDES.PHP PERO NO ME DEJA
$fechadesde=$_POST["fechadesde"]; //NO LO TOMA 
$fechahasta=$_POST["hasta"]; // NO LO TOMA
$verdadero=1;

$aceptar= mysql_query("SELECT fecha_desde, fecha_hasta FROM reservas WHERE id_couch='$idcouch' AND estado='Aceptado'",$con);
                        //filtro por ID couch para ver las reservas que ya tiene ese cocuch.

if( mysql_num_rows($aceptar) != 0)   // si tiene las proceso y me fijo si hay alguna reserva en el rango
{        
    while($resultado=mysql_fetch_array($aceptar))
    {

  		  if (!(  ( ($fechadesde<$resultado["fecha_desde"]) AND ($fechahasta<=$resultado["fecha_desde"])) OR ($fechadesde>=$resultado["fecha_hasta"]) ) )  //puede que haya otros casos, puse not para buscar donde estaria bien.., si no esta bien pone verdadero en 0.
        		{
        			$verdadero=0;
        		}
	  }

	if ($verdadero)
    {
      	   $sql2= mysql_query("UPDATE reservas SET estado='Aceptado' WHERE id_reserva='$idreserva'",$con); 

           //acepto la reserva


           //rechazo el resto:

           $rechazar= mysql_query("SELECT fecha_desde, fecha_hasta FROM reservas WHERE id_couch='$idcouch' AND estado='Esperando'",$con);  
            
          while($resultado=mysql_fetch_array($rechazar))
          {
            
            if (!((($fechadesde<$resultado["fecha_desde"]) AND ($fechahasta<=$resultado["fecha_desde"])) OR ($fechadesde>=$resultado["fecha_hasta"])))
            
            {
                $sql2= mysql_query("UPDATE reservas SET estado='Rechazado' WHERE id_reserva=$resultado[id_reserva]",$con);
            } 
         
          }
            ?>
            <script>
                alert('La reserva fue aceptada correctamente, las solicitudes pendientes que coincidian con las fechas fueron rechazadas'); //coincidia entonces tiene que procesar todas las otras pendientes y rechazar.

                window.location="solicitudes.php";
            </script>
             <?php

    }

      else
      {
    		?>
        	<script>
            	alert('Ya existe una reserva aceptada para este Couch donde coinciden las fechas, serán rechazadas las demás reservas'); //coincidia entonces tiene que procesar todas las otras pendientes y rechazar.

           		window.location="solicitudes.php";
       		 </script>
       		 <?php
       		
       		 //aca todas las que voy a tener que rechazar, por ahi se puede hacer mas arriba pero no se me ocurrio como. El tema es como controlo todas contra las que ya estan... por ahi no tengo que tener en cuenta el estado y tener en cuenta que comparo esperando con todos los Aceptado y asi...

    	}

}

    else
    {
      $sql2= mysql_query("UPDATE reservas SET estado='Aceptado' WHERE id_reserva='$idreserva'",$con);
      ?>
          <script>
              alert('La reserva fue aceptada correctamente'); //coincidia entonces tiene que procesar todas las otras pendientes y rechazar.

              window.location="solicitudes.php";
           </script>
       <?php    
      }




