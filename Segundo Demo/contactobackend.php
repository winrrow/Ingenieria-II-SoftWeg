<?php  
include("headconopcionesbackend.php");
/*include('conectar.php');
session_start();
if (!isset($_SESSION["mail"])){
    exit();
} */   
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/contactobackend.css" >

</head>
<body id="bodycontacto">
	<div id="contenedorformulario">
			<form class="form-horizontal" name="formulario">	
				<div class="form-group">
        					<label class="control-label col-xs-2"></label>
        				<div class="col-xs-5">
            				<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
        				</div>
    			</div>
    			<div class="form-group">
        			<label class="control-label col-xs-2"></label>
        			<div class="col-xs-5">
            			<input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
        			</div>
    			</div>
				<div class="form-group">
        				<label class="control-label col-xs-2"></label>
        				<div class="col-xs-5">
            				<input type="email" class="form-control" name="mail" id="inputEmail" placeholder="Email" required>
        				</div>
    			</div>
    			<div>
    				<label class="control-label col-xs-2"></label>
    					<textarea class="form-control-text" rows="6" name="descripcion" placeholder="Introduzca su mensaje" required></textarea>
    			</div>			
    			<div class="form-group-botones">
        			<div class="col-xs-offset-3 col-xs-9">
            			<input id="submit" type="submit" class="btn btn-primary" value="Enviar" onclick="return confirm('¿Realmente deseas enviar el furmulario?, si presiona confirmar sera enviado');">
						<input type="reset" class="btn btn-default" value="Limpiar">
        			</div>
    			</div>
    		</form>
	</div>
</body>
</html>