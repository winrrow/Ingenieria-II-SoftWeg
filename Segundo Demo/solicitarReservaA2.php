<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        
       
            
    </head>
    
    <body>
<?php

include("headconopcionesbackend.php");
include("conectar.php");

$idcouch=$_POST['id'];

$sql= mysql_query("SELECT couchs.fecha_desde, couchs.fecha_hasta FROM couchs  WHERE id_couch='$idcouch'",$con);

while($row = mysql_fetch_array($sql)){
    $fechadesde=  $row["fecha_desde"];
    $fechahasta= $row["fecha_hasta"];
}
						


?>
        <div class="container">
        
<?php

echo "<br>";
?>
<form method="POST" action="solicitarReserva2.php" name='formReserva' id="formReserva">
    
   Fecha de inicio de reserva 
   <input class="form-control textInput2" id="desdeR" name="desdeR" required="" type="date" min=<?php echo max($fechadesde, date("Y-m-d")); ?> max=<?php echo date('Y-m-d',strtotime("$fechahasta - 1 day"))?>>
   <br>
   Fecha de fin de reserva
   <input class="form-control textInput2" id="hastaR" name="hastaR" required="" max=<?php echo $fechahasta; ?> min=<?php echo max((date('Y-m-d',strtotime("$fechadesde + 1 day"))), date("Y-m-d")); ?> type="date">
       
   <br>
   
   <?php
   
   //Ahora que ya mostre en el formato que queria...
   //Convierto las fechas a formato Y-m-d para que sea posible compararlas en las consultas a la base de datos

        $fechadesde= date('Y-m-d',strtotime($fechadesde));
        $fechahasta= date("Y-m-d",strtotime($fechahasta));
   
   ?>
      
   <input type="hidden" name="idcouch" id="idcouch" value="<?php echo $idcouch ?>">
   
   <div class="btn btn-success" onclick="submitSolicitud()">Enviar solicitud</div>
   

   
</form>
        
    </div>
        
         <script>
       
            function validar() {
                    inicio=document.getElementById('desdeR').value;
                    final=document.getElementById('hastaR').value;
                    inicio=new Date(inicio);
                    final=new Date(final);
                    if(inicio>=final){
                        
                        alert('La fecha de final de estadía es menor o igual a la fecha de inicio de la misma.\n\
                               Por favor, vuelva a ingresarlas nuevamente.');
                        fechasok=false;
                        return fechasok;
                        
                    }
                   else if ( (!Date.parse(inicio)) || (!Date.parse(final)) ) {
                        alert('La fechas no fueron completadas correctamente. Por favor vuelva a hacerlo.');
                        fechasok=false;
                        return fechasok;
                      } 
                      else{
                        fechasok=true;
                        return fechasok;
                    }
                }
                
                
            function queNoHayaReservasAceptadasEnEsasFechas(){
             
             <?php
                
                $reservas = mysql_query("SELECT * FROM reservas WHERE estado='Aceptado' AND id_couch='$idcouch' AND ((fecha_desde BETWEEN '$fechadesde' AND '$fechahasta') OR (fecha_hasta BETWEEN '$fechadesde' AND '$fechahasta'))",$con); 
                   // . " AND (fecha_desde>='$fechadesde' AND fecha_hasta<='$fechahasta')");       
                if ( mysql_num_rows ($reservas) > 0 ){
                
                ?>
                Hay = true;
                alert('Ya hay una reserva aceptada para esas fechas. Por favor, intente nuevamente con otras fechas'); 
           
                <?php
                    }
                ?>

              }    


            function submitSolicitud(){
                
                fechasok = false;
                Hay= false;
                
                queNoHayaReservasAceptadasEnEsasFechas();
                validar();
                
                if ( fechasok ){
                    
                    if (Hay===false){
                        alert('hago submit');
                        document.getElementById("formReserva").submit();
                    }
                    else{
                        alert('Hay = true');
                    }
                    
                }         

            }
       
       </script>

        
        
    </body>
</html>
