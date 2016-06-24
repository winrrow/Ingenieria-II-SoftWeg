<?php  
include("conectar.php");
$mail='pepe@live.com';
echo $mail;
//HACER SET
	//mysql_query("UPDATE usuario SET contrasena='123' WHERE mail='gus_lp@live.com'"
	
	/*$sql= mysql_query("SELECT * FROM usuarios  WHERE mail='gus@live.com'",$con);
		while($row = mysql_fetch_array($sql)){
			echo $row['mail']."</br>";
			echo '<img src="'.$row["fotousuario"].'"width="100" heigth="100">';
		}*/

	$sql=("UPDATE usuarios SET nombre = 'gustavo', apellido ='andrade' WHERE mail = '$mail'"); 
			echo $sql;
			if (!mysql_query($sql,$con)){
				die('error');
			}	
	/*$sql=("INSERT INTO test (descripcion,titulo_couch,foto_premium VALUES ('des','hola','')");
		if (!mysql_query($sql,$con)){
			die('error');
			}
/*$sql=("INSERT INTO usuario (nombre,apellido,mail,dni,contrasena,megusta,nomegusta,fecha_nac,foto,es_admin,es_premium,pais,genero) VALUES ('gustavo','andrade','gus_lp@live.com','','12345','','','1991/08/02','','','','argentina','masculino')");
if (!mysql_query($sql,$con)){
	die('error');
}*/
/*nombre,apellido,mail,dni,contrsena,megusta,nomegusta,fecha_nac,foto,es_admin,es_premium,pais,genero) VALUES ('$nombre','$apellido','$mail','','$contraseña','','','$fecha','','','','$pais','$genero')");*/

?>