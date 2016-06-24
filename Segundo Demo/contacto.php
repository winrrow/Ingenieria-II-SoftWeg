<?php  
include("headconopciones.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/estilos.css" >	
</head>
<body id="bodycontacto">
	<div id="contenedorformulario">
			<form class="form-horizontal">	
				<div class="form-group">
        					<label class="control-label col-xs-2"></label>
        				<div class="col-xs-5">
            				<input type="text" class="form-control" placeholder="Nombre" required>
        				</div>
    			</div>
    			<div class="form-group">
        			<label class="control-label col-xs-2"></label>
        			<div class="col-xs-5">
            			<input type="text" class="form-control" placeholder="Apellido" required>
        			</div>
    			</div>
				<div class="form-group">
        				<label class="control-label col-xs-2"></label>
        				<div class="col-xs-5">
            				<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
        				</div>
    			</div>
    			<div>
    				<label class="control-label col-xs-2"></label>
    					<textarea class="form-control-text" rows="6" placeholder="Introduzca su mensaje" required></textarea>
    			</div>			
    			<div class="form-group-botones">
        			<div class="col-xs-offset-3 col-xs-9">
            			<input id="submit" type="submit" class="btn btn-primary" value="Enviar" onclick="return confirm('¿Realmente deseas enviar el formulario?, si presiona aceptar sera enviado');">
						<input type="reset" class="btn btn-default" value="Limpiar">
        			</div>
    			</div>
    		</form>
	</div>
</body>
</html>
