<html>
<head>
<title>SetMovil Archivo</title>
<body text="lime" Alink="#00ff00">

<?php 
    $codigo=$_REQUEST['codigo'];
	require ("conexion.php");
	$conectar=conectar();
	$cmd="select * from tb_venta where codigo=$codigo";
	$resultado=mysqli_query($conectar, $cmd);
	$fila=mysqli_fetch_array($resultado);
	?>
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
<td><font color="blue"><a href="index.php">Inicio</a></font></td>
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
<br><br><p><h1><center>ELIMINAR VENTA</center></h1>
<form enctype="multipart/form-data" method=POST action="eliminar_venta2.php">

<tr>
<td><font color=white>Codigo &nbsp;&nbsp;</font></td>
<td><input type=TEXT REQUIRED name="txtcodigo" ReadOnly="true" value="<?php echo $fila['codigo'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Id cliente &nbsp;&nbsp;</font></td>
<td><input type=TEXT REQUIRED name="txtid_cliente" ReadOnly="true" value="<?php echo $fila['cod_cliente'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Cod articulo</font> </td>
<td><input type=TEXT REQUIRED name="txtcod_articulo" ReadOnly="true" value="<?php echo $fila['cod_articulo'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Cantidad</font> </td>
<td><input type=TEXT REQUIRED name="txtedad" ReadOnly="true" value="<?php echo $fila['cantidad'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Precio Unit.</font> </td>
<td><input type=TEXT REQUIRED name="txttelefono" ReadOnly="true" value="<?php echo $fila['precio_unit'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Monto</font> </td>
<td><input type=TEXT REQUIRED name="txtdireccion" ReadOnly="true" value="<?php echo $fila['monto'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Fecha</font> </td>
<td><input type=TEXT  REQUIRED name="txtpais" ReadOnly="true" value="<?php echo $fila['fecha'];?>"/><br></td>
</tr>
<tr width=100%>
<td colspan=2><center><input type="submit" value="Eliminar"></center></td>
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
<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  ELIMINANDO DEL FORMULARIO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->


</body>
</head>
</html>