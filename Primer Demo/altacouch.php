<html>
    <head>
        <title>CouchInn - Publicar couch</title>
        <meta charset="UTF-8">
     </head>
</html>
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
$idtipo=$_POST['id_tipo_couch'];
$mail=$_SESSION['mail'];
$descripcion = $_POST['descripcion'];
$titulo = $_POST['titulo'];
$capacidad = $_POST['capacidad'];   
$provincia=$_POST['provincia'];
$ciudad=$_POST['ciudad'];
$desde=$_POST['desde'];
$hasta=$_POST['hasta']; 
$fechaactual= date('Y-m-d');
$foto=$_FILES["foto"]["name"];
if($foto == null){
    $destino="fotos_couch/sinimagen.png";
if ($desde < $fechaactual){
                ?>
                    <script type="text/javascript">
                        alert("La fecha disponible debe ser mayor a la fecha actual");
                        location.href = "uploadcouch.php";
                    </script>   
                <?php   
         }
         if($hasta < $desde){
                 ?>
                    <script type="text/javascript">
                        alert("La fecha de egreso debe ser mayor que la de ingreso");
                        location.href = "uploadcouch.php";
                    </script>   
                <?php   
         }
         if (($desde >= $fechaactual)AND($desde < $hasta)){
                $sql=("INSERT INTO couchs (descripcion,titulo,capacidad,megusta,nomegusta,mail,id_tipo_couch,ciudad,provincia,fecha_desde,fecha_hasta,fotocouch) VALUES ('$descripcion','$titulo','$capacidad','','','$mail','$idtipo','$ciudad','$provincia','$desde','$hasta','$destino')");
                if (!mysql_query($sql,$con)){
                    die('error');
                }else{
                        $sql= mysql_query("SELECT * FROM tipo_couchs  WHERE id_tipo_couch='$idtipo'",$con);
                            while($row = mysql_fetch_array($sql)){
                                $contador=$row['contador_usado'];
                            }
                            $contador=$contador+1;
                            mysql_query("UPDATE tipo_couchs set contador_usado='$contador' WHERE id_tipo_couch ='$idtipo'",$con);
                        ?>
                            <script type="text/javascript">
                                alert("El couch se dio de alta exitosamente");
                                location.href = "miperfil.php";
                            </script>   
                        <?php
                }
         }
}else{
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="fotos_couch/".$foto;
        copy($ruta,$destino);
             if ($desde < $fechaactual){
                    ?>
                        <script type="text/javascript">
                            alert("La fecha disponible debe ser mayor a la fecha actual");
                            location.href = "uploadcouch.php";
                        </script>   
                    <?php   
             }
             if($hasta < $desde){
                     ?>
                        <script type="text/javascript">
                            alert("La fecha de egreso debe ser mayor que la de ingreso");
                            location.href = "uploadcouch.php";
                        </script>   
                    <?php   
             }
             if (($desde >= $fechaactual)AND($desde < $hasta)){
                    $sql=("INSERT INTO couchs (descripcion,titulo,capacidad,megusta,nomegusta,mail,id_tipo_couch,ciudad,provincia,fecha_desde,fecha_hasta,fotocouch) VALUES ('$descripcion','$titulo','$capacidad','','','$mail','$idtipo','$ciudad','$provincia','$desde','$hasta','$destino')");
                    if (!mysql_query($sql,$con)){
                        die('error');
                    }else{
                            $sql= mysql_query("SELECT * FROM tipo_couchs  WHERE id_tipo_couch='$idtipo'",$con);
                                while($row = mysql_fetch_array($sql)){
                                    $contador=$row['contador_usado'];
                                }
                                $contador=$contador+1;
                                mysql_query("UPDATE tipo_couchs set contador_usado='$contador' WHERE id_tipo_couch ='$idtipo'",$con);
                            ?>
                                <script type="text/javascript">
                                    alert("El couch se dio de alta exitosamente");
                                    location.href = "miperfil.php";
                                </script>   
                            <?php
                    }
             }
    }
?>


