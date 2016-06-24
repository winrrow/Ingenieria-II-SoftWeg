<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        
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


            function submitSolicitud(){
                
                fechasok = false;
                
                validar();
                
                if ( fechasok ){
                document.getElementById("formReserva").submit();
                }         

            }
       
       </script>

            
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
      
   <input type="hidden" name="idcouch" id="idcouch" value="<?php echo $idcouch ?>">
   
   <div class="btn btn-success" onclick="submitSolicitud()">Enviar solicitud</div>
   

   
</form>
        
    </div>
    </body>
</html>
