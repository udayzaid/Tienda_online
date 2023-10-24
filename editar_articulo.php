<html>
<head>
<title>SetMovil Archivo</title>
<body text="lime" Alink="#00ff00">

<?php 
    $codigo=$_REQUEST['codigo'];
	require ("conexion.php");
	$conectar=conectar();
	$cmd="select * from tb_articulo where codigo=$codigo ";
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
<br><br><p><h1><center>EDITAR ARTICULO</center></h1>
<form enctype="multipart/form-data" method=POST action="editar_articulo2.php">


<tr>
<td><font color=white>Codigo &nbsp;&nbsp;</font></td>
<td><input type=TEXT REQUIRED name="txtcodigo"  ReadOnly="true" value="<?php echo $fila['codigo'];?>"/><br></td>
</tr>


<tr>
<td><font color=white>Marca &nbsp;&nbsp;</font></td>
<td><input type=TEXT REQUIRED name="txtmarca" value="<?php echo $fila['marca'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Modelo</font> </td>
<td><input type=TEXT REQUIRED name="txtmodelo" value="<?php echo $fila['modelo'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Color</font> </td>
<td><input type=TEXT REQUIRED name="txtcolor" value="<?php echo $fila['color'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Pulgadas</font> </td>
<td><input type=TEXT REQUIRED name="txtpulgadas" value="<?php echo $fila['pulgadas'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Memoria</font> </td>
<td><input type=TEXT REQUIRED name="txtmemoria" value="<?php echo $fila['memoria'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>C&aacute;mara</font> </td>
<td><input type=TEXT  REQUIRED name="txtcamara" value="<?php echo $fila['camara'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Precio</font> </td>
<td><input type=TEXT   REQUIRED name="txtprecio" value="<?php echo $fila['precio'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Url Imagen</font> </td>
<td><input type=file REQUIRED name="txtimagen"><input type=TEXT REQUIRED name="txtimagen" value="<?php echo $fila['imagen'];?>"><br></td>
</tr>
<tr width=100%>
<td colspan=2><center><input type="submit" value="Editar"></center></td>
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