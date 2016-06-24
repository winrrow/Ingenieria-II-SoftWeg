<?php

include("headconopcionesbackend.php");
include("conectar.php");
$id=$_POST['idreserva'];

$sql= mysql_query("UPDATE reservas SET estado='Rechazado' WHERE id_reserva='$id'",$con);

    ?>
    <script>
        alert('Se rechazo la reserva correctamente');
        window.location="solicitudes.php";
    </script>
    <?php

