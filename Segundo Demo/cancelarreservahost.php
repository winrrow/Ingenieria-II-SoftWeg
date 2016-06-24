<?php

include("headconopcionesbackend.php");
include("conectar.php");
$id=$_POST['idreserva'];
$fechadesde=$_POST['fechadesde'];
$fechadesde= date('Y-m-d',strtotime($fechadesde));

if(date('Y-m-Y')>$fechadesde){

	 ?>
    <script>
        alert('No se puede cancelar la reserva porque la fecha de inicio ya paso');
        window.location="reservasaceptadas.php";
    </script>
    <?php

}
else
{
$sql= mysql_query("UPDATE reservas SET estado='Cancelado_H' WHERE id_reserva='$id'",$con);

    ?>
    <script>
        alert('Se cancelo la reserva solicitada correctamente');
        window.location="reservasaceptadas.php";
    </script>
    <?php
}