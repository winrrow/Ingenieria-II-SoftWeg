<?php  
include("headconopciones.php");
?>
<html>
    <head>
        <title>CouchInn - Iniciar Sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles/login.css">
    </head>
    <body>
       
<div class="container">
    
    
	<div class="row">
		<form class="form-signin mg-btm"  action="logear_usuario.php" method="POST">
    	<h3 class="heading-desc" id="tituloLogin">
		Iniciar sesión</h3>

		<div class="main">	
            <label class="margen20">Email</label>    
            <div class="input-group margen20" style="width:50%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                
            	<input type="email" class="form-control" name="mail" placeholder="Escribe tu mail" autofocus="" required="">
            </div>
            
            <label style="margin-top:3%;" class="margen20">Contraseña   </label>
            
            
            <div class="input-group" style="width:50%;margin-left:20%;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="contrasena" placeholder="Escribe tu contraseña" required="">
                
            </div>
            <div style="margin-top:1%;" class="margen20"><a href="olvide_contrasena.php">Olvide mi contraseña</a></div>
    
        	<div class="row">
                <div class="col-xs-6 col-md-6">
                     
                </div>
                <div class="col-xs-12 col-md-12 pull-left margin20" style="top-margin:5%;right-margin:40%;">
                    <button type="submit" class="btn btn-success" style="margin-left:40%;"onclick="window.location=inicio.php">Iniciar sesión</button>
                </div>
            </div>
		</div>
        
		<span class="clearfix"></span>	

		<div class="login-footer">
    		<div class="row">
                <div class="col-xs-6 col-md-6">
                    <div class="left-section margen40">
                        <p>¿No estas registrado?</p> <a href="registro.php">Crear tu cuenta</a>
    				</div>
                </div>
                <div class="col-xs-6 col-md-6 pull-right">
                </div>
            </div>
		</div>
      </form>
	</div>
</div>
        
        
    </body>
</html>