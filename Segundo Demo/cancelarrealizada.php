<?php

include("headconopcionesbackend.php");
include("conectar.php");
$id=$_POST['id'];

$sql= mysql_query("UPDATE reservas SET estado='Cancelado_S' WHERE id_reserva='$id'",$con);

    ?>
    <script>
        alert('Se cancelo la reserva solicitada correctamente');
        window.location="reservas.php";
    </script>
    <?php

