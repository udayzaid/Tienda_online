<html>
<head>
<title>SetMovil Archivo</title>
<body text="lime" Alink="#00ff00">
<!--  ------------------ENCABEZADO --------- <tr>=Fila y  <td>=Columna--------     -->
<div>
<table Align=center  width=100% height=13% border="2">
<tr width=100% height=13% background="imagenes/Barra_titulo.gif">
<td  height=13% >
<center><font face=verdana color=white>TELEFONOS M&Oacute;VILES</font></center>
</td>
</tr>
</table>
</div>
<!--  ------------------MENU -----------------     -->
<div >
<table  Align=right border=1>
<tr bgcolor=lime >
<td><font color="blue"><a href="index.php">Archivo</a></font></td>
</tr>
</table>
</div>
<div>

</div>
<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<    CUERPO   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -----------------     -->
<div id=CUERPO>
<table  width=100%  height=75% border=2>
<tr background="imagenes/fondo4.jpg" height=70%>
<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO PARTE IZQUIERDA  >>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=10% >
<!--<img src="imagenes/base.png"  width=90% > --!>

</td>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO CENTRO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td><center>
<table  width=40%  height=40% border="2">
<tr>
<br><br><p><h1><center>REGISTRO CLIENTES</center></h1>
<form enctype="multipart/form-data" method=POST action="guardar_cliente.php">
<tr>
<td><font color=white>Id &nbsp;&nbsp;</font></td>
<td><input type=TEXT name="txtid"><br></td>
</tr>
<tr>
<td><font color=white>Nombre &nbsp;&nbsp;</font></td>
<td><input type=TEXT name="txtnombre"><br></td>
</tr>
<tr>
<td><font color=white>Apellido</font> </td>
<td><input type=TEXT name="txtapellido"><br></td>
</tr>
<tr>
<td><font color=white>Edad</font> </td>
<td><input type=TEXT name="txtedad"><br></td>
</tr>
<tr>
<td><font color=white>Telefono</font> </td>
<td><input type=TEXT name="txttelefono"><br></td>
</tr>
<tr>
<td><font color=white>Direcci&oacute;n</font> </td>
<td><input type=TEXT name="txtdireccion"><br></td>
</tr>
<tr>
<td><font color=white>Pa&iacute;s</font> </td>
<td><input type=TEXT name="txtpais"><br></td>
</tr>
<tr>
<td><font color=white>Cuidad</font> </td>
<td><input type=TEXT name="txtciudad"><br></td>
</tr>
<tr>
<td><font color=white>Correo</font> </td>
<td><input type=TEXT name="txtcorreo"><br></td>
</tr>
<tr width=100%>
<td colspan=2><center><input type="submit" value="Aceptar"></center></td>
</tr>


</form></center>

</tr>
</table>
</td>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO PARTE DERECHA  >>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=10%>

</td>
</tr>
</table>
</div>
</p>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  PIE DE PÁGINA  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->

<div id=PIE>
<table width=100% >
<tr background="imagenes/fondo4.jpg">
<td><font color=white>©  Omar Gonzales & Jody Moreno</font></td>
</tr>
</table>
</div>
<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  GUARDADO DEL FORMULARIO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->


</body>
</head>
</html>