# formulario_json_php
es una tabla usando json para eso necesitamos una base de datos mysql

<?
    $conexion=mysql_connect("localhost","root","12345678") or die("Error en la conexión");
	mysql_select_db("universidad1",$conexion) or die("Error en la Base de datos");
	$sql="Select * from alumnos where matricula='$_GET[matricula]'";
	$datos=mysql_query($sql,$conexion) or die("Error de SQL");
	$reg=mysql_fetch_array($datos);
	$resultado[]=array("matricula"=>$reg[0]);
	$resultado[]=array("nombre"=>utf8_encode($reg[nombre]));
	$resultado[]=array("apellidoPaterno"=>utf8_encode($reg[2]));
	$resultado[]=array("apellidoMaterno"=>utf8_encode($reg[3]));
	echo json_encode($resultado);
	mysql_free_result($datos);
	mysql_close($conexion);
?>
