<?php
include("conectar.php");
include("headconopcionesbackend.php");
$id=$_POST['id'];
//$mail=$_SESSION["mail"];
	$sql= mysql_query("SELECT * FROM couchs  WHERE id_couch='$id'",$con);
						while($row = mysql_fetch_array($sql)){
						$id2=$row["id_couch"];
                        $descripcion=$row['descripcion'];
						$titulo=$row['titulo'];
						$capacidad=$row['capacidad'];
						$megusta=$row['megusta'];
						$nomegusta=$row['nomegusta'];
						$mail=$row['mail'];
						//$nombre_tipo=$row['id_tipo_couch'];
                        $ciudad=$row['ciudad'];
                        $provincia=$row['provincia'];
                        $fecha_desde=$row['fecha_desde'];
                        $fecha_hasta=$row['fecha_hasta'];
                        $fotocouch=$row['fotocouch'];
                        $fecha_desde=$row['fecha_desde'];
                        $fecha_hasta=$row['fecha_hasta'];
                        $foto=$row['fotocouch'];
    }
         
?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/couch.css">
        <link rel="stylesheet" type="text/css" href="styles/modificarcouch.css">
</head>
<body>
	   <div id="paisajemiperfil">
                <h1 id="titulocouchmodificado"> Modificar Couch </h1>
        </div>
    <div>
         
        <form class="form-signin" method="POST"  action="actualizarcouch.php"  enctype="multipart/form-data">
           
        <div>
            <p id="modtitulo">
                Modificar titulo de couch
            </p>
            
            <input class="form-control textInput2" name="tituloCoachModificado" id="tituloCouchMOD" value="<?php echo $titulo ?>" required="" type="text">
        
            
            <p class="inputAltaCoach" id="tipocouch">Tipo de couch</p>
                <select class="form-control" name="tipoCouchModificado" id="tipocouch1" style="width: 30%">
                    <?php
                        $sql=mysql_query("SELECT * FROM tipo_couchs",$con);
                            while($row = mysql_fetch_array($sql)){
                                echo "<option>".$row['nombre_tipocouch']."</option>";
                                $identificador_tipo_couch=$row['id_tipo_couch'];
                            }
                        ?> <input class="hidden" type="text" id="id_tipo_couch" name="id_tipo_couch" value= "<?php echo $identificador_tipo_couch ?>"><?php
                            
                    ?>
                </select>
            
        </div>

          <input class="hidden" type="text" name="unico" value= "<?php echo $id ?>">   
        
        <div id="imagenmodificar" class="col-md-6">
           <?php 
            echo "<img src='$foto' width=500 height=400>";
             ?>
        </div>
        
            <div class="col-md-6">
                <!-- Queda vacio para el estilo -->
            </div>
            <div class="col-md-6">
                
                <div id="datofoto" >
                    <p>Cambiar foto de couch</p>
                    <input name="fotoCouchModificado" id="fotoCouchModificado" type="file">
                </div>
                
            </div>    
           
           <div id="informacion">
                <label id="descripcion" class="control-label col-xs-2"> Descripcion:</label>
                    <textarea class="form-control-text" id="texto" rows="6" cols="60" name='descripcionCouchModificado'><?php echo $descripcion?></textarea>
            </div>  
     
                
        
        <div id="informacionespecifica" class="col-md-10">
            
            <p id="infoEspecifica">Información especifica</p>
            
        </div>
          <div>  
            <p id="megusta" style="color:green;display:inline-block;">Me Gusta:
            <?php 
                echo    $megusta."       "
            ?>
            </p>
            
            <p id="nomegusta" style="color:red;display:inline-block;">No Me Gusta:
            <?php       
                echo    $nomegusta; 
            ?>  
            </p>
            
             </div>
        
    <div>
            
<table class="table table-bordered">
    <thead>
    </thead>
    <tbody>
        <tr>
            <th>
                Fecha desde
            </th>
            <th>
                Fecha hasta
            </th>
        </tr>    
           <tr>
          <td>
                            
               <input class="form-control textInput2" requiered="" type="date" name="fecha_desdeModificado" id="fecha_desdeModificado" value="<?php echo $fecha_desde;?>">
          
          </td>
        <td>

               <input class="form-control textInput2" requiered="" type="date" name="fecha_hastaModificado" id="fecha_hastaModificado" value="<?php echo $fecha_hasta;?>">
                 
        </td>
      <tr>
        </tr>
        <tr>
            <th>Capacidad</th>
            <td>

                <select class="form-control textInput2" requiered="" name=capacidadCouchModificado value="<?php echo $capacidad;?>">
                    <option>1</option>;
                    <option>2</option>;
                    <option>3</option>;
                    <option>4</option>;
                    <option>5</option>;
                    <option>6</option>;
                    <option>7</option>;
                    <option>8</option>;
                    <option>9</option>;
                    <option>10</option>;
                </select>
            
            </td>
        </tr>
        <tr>
            <script type= "text/javascript" src = "localidades.js"></script>
            <th>Provincia</th>
            <td>
                  <select class="form-control" id="provinciaMOD" name ="provinciaMOD" required=""></select> </br>
            </td>
        </tr>
      <tr>
        <th>Ciudad</th>
        <td>
            <select class="form-control" name ="ciudadMOD" id ="ciudadMOD" required=""></select>  </br>
        </td>
            <script language="javascript">
            listarProvincias("provinciaMOD", "ciudadMOD");
           </script>
      </tr>
      
      </tbody>
      </table>
            
        </div>
        
        
        <button class="btn btn-success btn-lg" id="modificar">
            Modificar
        </button>   
        </form>
        
        <a href="miscouch.php" class="btn btn-success btn-lg" id="botonvolver">
            Ir a Mis Couch
        </a>
        
        
    </div>
    
</body>
</html>