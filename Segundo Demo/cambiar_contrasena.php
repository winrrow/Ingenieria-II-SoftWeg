<?php  
include("headconopcionesbackend.php");
?>
<html>
    <head>
        <title>CouchInn - Iniciar Sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles/olvide_contrasena.css">
    </head>
    <body>
       
<div class="container">
    
    
	<div class="row">
		<form class="form-signin mg-btm" name="formulariode_olvide_clave" action="cambiar_clave.php" method="POST">
    	<h3 class="heading-desc" id="tituloLogin">
		Cambiar Contraseña</h3>

        <div class="main">  
            <label class="margen20">Ingrese su mail</label>    
            <div class="input-group margen20" style="width:50%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                
                <span><input class="form-control textInput2" name="mail" placeholder="Ingrese su mail" required="" autofocus="" type="email" id="mail"></span>
            </div>
        </br> </br>
		<div class="main">	
            <label class="margen20">Contraseña actual</label>    
            <div class="input-group margen20" style="width:50%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                
            	<span><input class="form-control textInput2" name="contrasena_actual" placeholder="Escriba su actual contraseña" required="" autofocus="" type="password" minlength="6"; maxlength="12"; id="contrasena_actual"></span>
            </div>
            
            <label style="margin-top:3%;" class="margen20">Contraseña   </label>
            
            
            <div class="input-group" style="width:50%;margin-left:20%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="contraseña" placeholder="Escriba su nueva contraseña" minlength="6" maxlength="12" onchange=" if(this.checkValidity()) form.contraseña1.pattern= this.value;" required="">
                
            </div>
            
             <label style="margin-top:3%;" class="margen20">Repita su Contraseña   </label>
            
            
            <div class="input-group" style="width:50%;margin-left:20%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="contraseña1" placeholder="Repita su nueva contraseña" title="Las Contraseñas no coinciden" minlength="6" maxlength="12" required="">
                
            </div>
        	
            <div class="row">
                <div class="col-xs-6 col-md-6">
                     
                </div>
                <div class="col-xs-12 col-md-12 pull-left margin20" style="margin-top:3%;right-margin:40%;">
                    <button type="submit" class="btn btn-success" style="margin-left:40%">Cambiar Contraseña </button>
                </div>
            </div>
		</div>
        
		<span class="clearfix"></span>	
      </form>
	</div>
</div>
        
        
    </body>
</html>