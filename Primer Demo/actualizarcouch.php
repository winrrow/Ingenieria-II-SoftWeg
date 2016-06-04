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
$id=$_POST['unico'];
$idtipo=$_POST['id_tipo_couch'];
$descripcion=$_POST['descripcionCouchModificado']; 
$tituloCouch=$_POST['tituloCoachModificado'];
$capacidad=$_POST['capacidadCouchModificado'];
$fecha_desde=$_POST['fecha_desdeModificado'];
$fecha_hasta=$_POST['fecha_hastaModificado'];
$ciudad=$_POST['ciudadMOD'];
$provincia=$_POST['provinciaMOD'];
$fotoCouchNombre=($_FILES["fotoCouchModificado"]["name"]);
if($fotoCouchNombre == NULL){
  $sql=("UPDATE couchs SET descripcion = '$descripcion', titulo='$tituloCouch', ciudad='$ciudad', provincia='$provincia',capacidad='$capacidad', id_tipo_couch='$idtipo', fecha_desde='$fecha_desde', fecha_hasta='$fecha_hasta' WHERE id_couch='$id'");

}else{
      $ruta=($_FILES["fotoCouchModificado"]["tmp_name"]);
      $destino="fotos_couch/".$fotoCouchNombre;
      copy($ruta,$destino);   //Copio la imagen subida (de temporal) a la carpeta de la bbdd (destino)
      $sql=("UPDATE couchs SET descripcion = '$descripcion', titulo='$tituloCouch', ciudad='$ciudad', provincia='$provincia',capacidad='$capacidad', id_tipo_couch='$idtipo', fotocouch='$destino', fecha_desde='$fecha_desde', fecha_hasta='$fecha_hasta' WHERE id_couch='$id'");
}
  if (!mysql_query($sql,$con)){
				die('error');
            }else{
                   ?>
                        <script>
                            alert('La modificacion se ha realizado con éxito.')
                            location.href="miscouch.php";
                        </script>
                  <?php
            }
?>