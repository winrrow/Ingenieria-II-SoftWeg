<?php  
include("headconopcionesbackend.php");
include("conectar.php");
$mail=$_SESSION["mail"];
?>
<html>
    <head>
        <title>Publicar un Couch - CouchInn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="styles/uploadCoach.css">
    </head>
    <body>  
    <div class ="container">
          
      <form class="form-signin" method="POST" name="formulariodealtacoach" action="altacouch.php" enctype="multipart/form-data">
        <div id="tituloPublicarCouch">Publicar un couch</div>
        
        
        <p class="inputAltaCoach">Titulo de couch</p>
        <span><input class="form-control" name="titulo" placeholder="Escribe el título del couch" required="" autofocus="" type="text" id="tituloCoach"></span>

        <p class="inputAltaCoach">Capacidad</p>
        <select class="form-control" name= "capacidad" style="width: 10%">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        <option value=6>6</option>
        <option value=7>7</option>
        <option value=8>8</option>
        <option value=9>9</option>
        <option value=10>10</option>
        </select>
  
        <p class="inputAltaCoach">Tipo de couch</p>
             <select class="form-control" name="tipo" style="width:30%">
                <?php
                    $sql=mysql_query("SELECT * FROM tipo_couchs",$con);
                    while($row = mysql_fetch_array($sql)){
                        echo "<option>".$row['nombre_tipocouch']."</option>";
                         $identificador_tipo_couch=$row['id_tipo_couch'];
                     }   
                       
                        ?> <input class="hidden" type="text" id="id_tipo_couch" name="id_tipo_couch" value= "<?php echo $identificador_tipo_couch ?>"><?php
                    
                ?>
            </select>
            <p class="inputAltaCoach">Localización del couch</p>
            <div style='text-align:center;'>
            <script type= "text/javascript" src = "localidades.js"></script>
            <select class="form-control" required="" id="provincia" name ="provincia" style="width: 30%"></select> </br>
            <select class="form-control" required="" name ="ciudad" id ="ciudad" style="width:30%"></select>  </br>
            </div>
            <script language="javascript">
            listarProvincias("provincia", "ciudad"); 
            </script>
        
        <p class="inputAltaCoach">Descripcion</p>
        <textarea id="descripcionAltaCoach"  name="descripcion" placeholder="Escribe la descripcion del coach aquí"></textarea>
        
        
        <div class="fotoPremiumAltaCoach">
            <input name="foto" type="file">
        </div>

        <div id="divdesde">
            <p class="textInput">Disponible Desde:</p>
            <input class="form-control textInput2" id="desde" name="desde" required="" type="date"></br>
        </div>
        <script language="javascript">
        document.getElementById('desde').value = "<?php echo date("Y-m-d"); ?>";
        </script>
        
        <div id="divhasta">
        
            <p class="textInput">Disponible Hasta:</p>
            <input class="form-control textInput2" id="hasta" name="hasta" required="" type="date">
        </div>
         
        <button class="btn btn-lg btn-success btn-blockx" id="publicarCoach" type="submit" onclick="window.location=miperfil.php">Publicar</button>
        <a href="miperfil.php" class="btn btn-lg btn-success btn-blockx" id="volverperfil" role="button"> Volver a mi perfil </a>
    </form> 
    </div>
</body>
</html>
