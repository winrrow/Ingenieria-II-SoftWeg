<?php  
include("headconopcionesbackend.php");
include("conectar.php");
$mail=$_SESSION["mail"];
?>
<html>
    <head>
        <title>Buscar Couch</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="styles/uploadCoach.css">

    <script>
       
          
            function submitSolicitud(){
                
                fechasok = false;
                inicio=document.getElementById('desde').value;
                final=document.getElementById('hasta').value;
                inicio=new Date(inicio);
                final=new Date(final);
                if(inicio>=final){    
                        alert('La fecha de final de estadía es menor o igual a la fecha de inicio de la misma.\n\
                               Por favor, vuelva a ingresarlas nuevamente.');
                        window.location=("buscarcouch.php");
                        fechasok=false;}     
                
              else{
                        fechasok=true;
                    }
                
                if (fechasok){
                document.getElementById("buscarcouch").submit();
                }         

            }
       
       </script>
    

    </head>
    <body>  
    <div class ="container">
          
      <form class="form-signin" method="POST" name="buscarcouch" action="busqueda.php" enctype="multipart/form-data">
        <div id="tituloPublicarCouch">Buscar Couchs</div>
        
        <p class="inputAltaCoach">Titulo de couch</p>
        <span><input class="form-control" name="titulo" placeholder="Título del couch" autofocus="" type="text" id="titulo" style="width: 50%"></span>


         <p class="inputAltaCoach">Tipo de couch</p>
             <select class="form-control" name="tipo" id="tipo" style="width:30%">
                <?php
                    $sql=mysql_query("SELECT * FROM tipo_couchs WHERE habilitado='si'",$con);
                    echo "<option>".Cualquier."</option>";
                    while($row = mysql_fetch_array($sql)){
                     echo "<option value='".$row['id_tipo_couch']."'>".$row['nombre_tipocouch']."</option>";

                     }   
                        ?> <input class="hidden" type="text" id="id_tipo_couch" name="id_tipo_couch" value= "<?php echo $identificador_tipo_couch ?>"><?php 
                    
                ?>

        <p class="inputAltaCoach">Capacidad</p>
        <select class="form-control" name= "capacidad" id="capacidad" style="width: 30%">
        <option value=0>No buscar por capacidad</option>
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
  
            </select>
            <p class="inputAltaCoach">Lugar</p>
            <div style='text-align:center;'>
            <script type= "text/javascript" src ="localidades.js"></script>
            <select class="form-control" id="provincia" name ="provincia" style="width: 30%"></select> </br>
            <select class="form-control" name ="ciudad" id ="ciudad" style="width:30%"></select>  </br>
            </div>
            <script language="javascript">
            listarProvincias("provincia", "ciudad"); 
            </script>
        

        <div>
            <p class="inputAltaCoach">Disponibilidad</p>
            <p class="textInput">Disponible Desde:</p>
            <input class="form-control textInput2" id="desde" name="desde" min="<?php echo date("Y-m-d"); ?>" type="date"></br>
        </div>
        
        <div id="divhasta">
        
            <p class="textInput">Disponible Hasta:</p>
            <input class="form-control textInput2" id="hasta" min=<?php echo date ( "Y-m-d",strtotime( '+1 day' , strtotime ( date("Y-m-d") ) )) ?> name="hasta" type="date">
        </div>
         
        <button class="btn btn-lg btn-danger btn-blockx" id="publicarCoach" type="submit" onclick="submitSolicitud()" >Buscar</button>

    </form> 
    </div>
</body>
</html>