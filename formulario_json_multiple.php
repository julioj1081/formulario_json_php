<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script language="JavaScript" src="jquery-2.1.1.min.js"></script>
<script language="javascript">
   $(document).ready(function(){
	  $("#enviar").click(function(){
		 $.getJSON("servidor_json_multiple.php",function(datos){
			for(i=0;i<=datos.length;i=i+4)
			{
			 $('#js-tabla tr:last').after('<tr><td>'+datos[i].matricula+'</td><td>'+datos		[i+1].nombre+'</td><td>'+datos[i+2].apellidoPaterno+'</td><td>'+datos[i+3].apellidoMaterno+'</td></tr>');
			}
		});
	    return false;
	  });
   });
</script>
</head>
<body>
<p align="center">Consulta de alumnos <br />
<input type=button id="enviar" value=Enviar /></p>
<table align="center" id="js-tabla">
<tr>
</tr>
</table>
</body>
</html>