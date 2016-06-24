<?php  
include("headconopcionesbackend.php");
?>
<html>
    <head>
        <title>Baja Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles/olvide_contrasena.css">
    </head>
    <body>
       
<div class="container">
    
    
	<div class="row">
		<form class="form-signin mg-btm" name="formulariode_cerrar_cuenta" action="bajausuarioefectiva.php" method="POST">
    	<h3 class="heading-desc" id="tituloLogin" style="text-align: left;">
		Baja Usuario</h3>

        <div class="main">  
            <label class="margen20">Ingrese su mail</label>    
            <div class="input-group margen20" style="width:50%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                
                <span><input class="form-control textInput2" name="mail" placeholder="Ingrese su mail" required="" autofocus="" type="email" id="mail"></span>
            </div>
		<div class="main">	
 
            
            <label style="margin-top:3%;" class="margen20">Contraseña </label>
            
            
            <div class="input-group" style="width:50%;margin-left:20%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="contrasena1" placeholder="Escriba su contraseña" minlength="6" maxlength="12" onchange=" if(this.checkValidity()) form.contrasena2.pattern= this.value;" required="">
                
            </div>
            
             <label style="margin-top:3%;" class="margen20">Repita su Contraseña   </label>
            
            
            <div class="input-group" style="width:50%;margin-left:20%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="contrasena2" placeholder="Repita su contraseña" title="Las Contraseñas no coinciden" minlength="6" maxlength="12" required="">
                
            </div>
        	
            <div class="row">
                <div class="col-xs-6 col-md-6">
                     
                </div>
                <div class="col-xs-12 col-md-12 pull-left margin20" style="margin-top:3%;right-margin:40%;">
                    <button type="submit" class="btn btn-success" style="margin-left:40%" "onclick="window.location=bajausuarioefectiva.php">Cerrar Cuenta </button>
                    <a id="modificarcouch" href="miperfil.php" class="btn btn-success"> Volver a mi perfil </a>
                </div>
            </div>
		</div>
        
		<span class="clearfix"></span>	
      </form>
	</div>
</div>
        
        
    </body>
</html>








