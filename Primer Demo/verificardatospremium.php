<?php
include("conectar.php");
session_start();
if(!isset($_SESSION['mail'])){
	?>
		<script type="text/javascript">
					alert("Debe iniciar sesion");
					location.href = "login.php";
		</script>	
	<?php
}
$mail=$_SESSION['mail'];
$sql=mysql_query("SELECT * FROM usuarios WHERE mail = '$mail'",$con);
while($row = mysql_fetch_array($sql)){
			$nombrebase=$row["nombre_usuario"];
			$mailbase=$row["mail"];
			$contrabase=$row["contrasena"];
			$fecha_nac_base=$row["fecha_nac"];
			$paisbase=$row["pais"];

}
//$mail=$_POST['mail'];
$contra=$_POST['contrasena'];
$contra1=$_POST['contrasena1'];
$nombre=$_POST['nombre'];
$pais=$_POST['pais'];
$tarjeta=$_POST['tarjeta'];
$emision=$_POST['fechaemision'];
$vencimiento=$_POST['fechavencimiento'];
$num_tarjeta=$_POST['contrasena2'];
$cod_tarjeta=$_POST['contrasena3'];

/*
if($mail != $mailbase){
	?>
		<script type="text/javascript">
				alert("El mail no coincide, ingreselo de nuevo");
				location.href = "serpremium.php";
		</script>	
	<?php
}
 */

$fechaactual=date('Y-m-d');


if ($vencimiento < $fechaactual){
   ?>
                <script type="text/javascript">
                        alert('La fecha de vencimiento no es válida');
                        location.href = "serpremium.php";
                </script>
    <?php
    
}


if($contra != $contra1){
	?>
		<script type="text/javascript">
			alert("Las contraseñas no coinciden, asegurese de ingresarlas");
			location.href = "serpremium.php";
		</script>	
	<?php
}
if ($contra != $contrabase){
	session_destroy();
	?>
		<script type="text/javascript">
			alert("Intruso detectado");
			location.href = "index.php";
	
		</script>	
	<?php
}
if($pais != $paisbase){
	?>
		<script type="text/javascript">
			alert("El pais que ingreso no coincide con el pais que ingreso cuando se registro");
			location.href = "serpremium.php";
	
		</script>	
	<?php
}
    if(($pais == $paisbase)&&($contra == $contrabase)&&($contra == $contra1)&&($vencimiento > $fechaactual)){
            $sql=("UPDATE usuarios SET es_premium = '1' WHERE mail = '$mail'");
                                    if (!mysql_query($sql,$con)){
                                            die('error');
                                    }	
                                    ?>
                                            <script type="text/javascript">
                                                    alert("Felicitaciones usted es usuario premium");
                                                    location.href = "miperfil.php";
                                            </script>	
       <?php
   		 }
                                    
 ?>

