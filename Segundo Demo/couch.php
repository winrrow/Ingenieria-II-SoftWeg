<?php


include("conectar.php");

include("headconopcionesbackend.php");
$mail=$_SESSION["mail"];

$id=$_POST['id'];

	$sql= mysql_query("SELECT * FROM couchs  WHERE id_couch='$id'",$con);
						while($row = mysql_fetch_array($sql)){
						$descripcion=$row['descripcion'];
						$titulo=$row['titulo'];
						$capacidad=$row['capacidad'];
						$megusta=$row['megusta'];
						$nomegusta=$row['nomegusta'];
						$mailcouch=$row['mail'];
						$idtipo=$row['id_tipo_couch'];
                                                $ciudad=$row['ciudad'];
                                                $provincia=$row['provincia'];
                                                $fecha_desde=$row['fecha_desde'];
                                                $fecha_hasta=$row['fecha_hasta'];
                                                $fotocouch=$row['fotocouch'];
                                                $fecha_desde=$row['fecha_desde'];
                                                $fecha_hasta=$row['fecha_hasta'];
                                                
					}


//Traigo el nombre del usuario que creó el couch                                       
 $sql2 = mysql_query("SELECT USUARIOS.NOMBRE_USUARIO"
         . "         FROM COUCHS INNER JOIN USUARIOS"
         . "         WHERE COUCHS.MAIL = USUARIOS.MAIL AND COUCHS.ID_COUCH='$id'", $con);
    while($row2 = mysql_fetch_array($sql2)){ 
        $nameuser=$row2['NOMBRE_USUARIO'];
     
    }

//Traigo el nombre del tipo del couch creado    
$sqlnombretipo = mysql_query("SELECT TIPO_COUCHS.nombre_tipocouch
                        FROM TIPO_COUCHS INNER JOIN COUCHS
                        WHERE COUCHS.id_tipo_couch = TIPO_COUCHS.id_tipo_couch", $con);
                       
    while ($rowNombreTipo = mysql_fetch_array($sqlnombretipo)){
        $nombretipo=$rowNombreTipo['nombre_tipocouch'];
    }
					
         
?>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/couch.css" >	
</head>
<body>
	
    <div class="container">
        
        <div id="tituloCouch">
            
            <?php 
                echo $titulo;           
            ?>
            
        </div>
        
        <div id="couchPublicadoPor">
            Publicado por <?php echo $nameuser ?>
        </div>
        
        <div class="col-md-12" id="descYFoto">
            
                <div class="col-md-6" id="mostrarDescripcionCouch" >

                    <?php
                        echo $descripcion; 
                    ?>

                </div>
            

        
                <div class="col-md-6">
                    <img src="<?php echo $fotocouch ?>" alt="Imagen del couch" width="400" height="400">
                </div>
        
        </div>    
            
        <div class="col-md-10">
            
            <p id="infoEspecifica">Información especifica</p>
            
        </div>
        <div class="col-md-2">
           
            <p style="color:green;display:inline-block;">
            <?php 
                echo    $megusta."       "
            ?>
            </p>
            
            <p style="color:red;display:inline-block;">
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
              <?php
              
                echo $fecha_desde=date("d-m-Y",strtotime($fecha_desde));
              
              ?>
          </td>
        <td>
              <?php
              
                echo $fecha_hasta=date("d-m-Y",strtotime($fecha_hasta));
              
              ?>
        </td>
      </tr>
      <tr>
        <th>Tipo de couch</th>
        <td>
            <?php
                echo $nombretipo;
            ?>
        </td>
      </tr>
      <tr>
        <th>Capacidad</th>
        <td>
            <?php 
            echo $capacidad;
            ?>
        </td>
      </tr>
    </tbody>
    </table>
            
        </div>
        

<!--

    ARREGLAR POPUP O PASAR CODIGO A COUCH.PHP Y ELEGIR DESDE AHI LA FECHA DE RESERVA DIRECTAMENTE

-->
    <?php
    
        if ($mail != $mailcouch){
    
    ?>
    
    
        <form method="POST" action="solicitarReserva.php">

            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">

            <input type="submit" value="SOLICITAR RESERVA" class="btn btn-success btn-lg" id="btnSolicitarReserva" href="solicitarReserva.php" target="_blank" onclick="window.open(http://localhost/CouchInn/solicitarReserva.php,this.target,'width=800,height=500,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;"> 
        
        </form>

    <?php
        }
    ?>
                    

    </div>
    
</body>
</html>