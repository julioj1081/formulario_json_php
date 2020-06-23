<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script language="JavaScript" src="jquery-2.1.1.min.js"></script>
<script language="javascript">
   $(document).ready(function(){
	  $("#enviar").click(function(){
		  var mat=$("#mat").val();
		 $.getJSON("servidor_json.php",{matricula:mat},function(datos){
			 $("#mat").val(datos[0].matricula);
			 $("#nombre").val(datos[1].nombre);
			 $("#apellidoPaterno").val(datos[2].apellidoPaterno);
			 $("#apellidoMaterno").val(datos[3].apellidoMaterno)
	  });
		 return false;
   });
 });
</script>
</head>
<body>
<p align="center">Consulta de alumnos</p>
<table width="339" border="0" align="center">
  <tr>
    <td width="183">Matricula</td>
    <td width="140"><input type=text id="mat" /></td>
  </tr>
  <tr>
    <td>Nombre </td>
    <td><input type=text id="nombre" /></td>
  </tr>
  <tr>
    <td>Apellido Paterno</td>
    <td><input type=text id="apellidoPaterno" /></td>
  </tr>
  <tr>
    <td>Apellido Materno</td>
    <td><input type=text id="apellidoMaterno" /></td>
  </tr>
  <tr>
    <td><input type=button id="enviar" value=Enviar /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>