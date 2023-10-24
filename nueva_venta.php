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

<br><br><p><h1><center>REGISTRO VENTAS</center></h1>
<br><br><p><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATOS CLIENTE</h3>
<form enctype="multipart/form-data" method=POST action="nueva_venta2.php">

<tr>

<td><font color=white>Id &nbsp;&nbsp;</font></td>
<td><input type=TEXT name="txtid" ><br></td>
<td><center><input type="submit" value="Buscar"></center></td>
</tr>
<tr>
<td><font color=white>Nombre &nbsp;&nbsp;</font></td>
<td><input type=TEXT name="txtnombre" ReadOnly="true" ><br></td>
</tr>
<tr>
<td><font color=white>Apellido</font> </td>
<td><input type=TEXT name="txtapellido" ReadOnly="true"><br></td>
</tr>
<tr>
<td><font color=white>Edad</font> </td>
<td><input type=TEXT name="txtedad" ReadOnly="true"><br></td>
</tr>
<tr>
<td><font color=white>Telefono</font> </td>
<td><input type=TEXT name="txttelefono" ReadOnly="true"><br></td>
</tr>
<tr>
<td><font color=white>Direcci&oacute;n</font> </td>
<td><input type=TEXT name="txtdireccion" ReadOnly="true"><br></td>
</tr>
<tr>
<td><font color=white>Pa&iacute;s</font> </td>
<td><input type=TEXT name="txtpais" ReadOnly="true"><br></td>
</tr>
<tr>
<td><font color=white>Cuidad</font> </td>
<td><input type=TEXT name="txtciudad" ReadOnly="true"><br></td>
</tr>
<tr>
<td><font color=white>Correo</font> </td>
<?php $a= $_REQUEST['codigo'];?>
<font color="white"><td><input type=TEXT  name="txtcodigon" bgcolor=blue ReadOnly="true" value="<?php echo $a;?>"><br></td></font>

</tr>


<td>
<?php
   $codigo=$_REQUEST['codigo'];
	require ("conexion.php");
	$conectar=conectar();
	$cmd="select * from tb_articulo where codigo=$codigo ";
	$resultado=mysqli_query($conectar, $cmd);
while ($fila=mysqli_fetch_array($resultado))
{

?>
<tr>
<td width=150><center><font color="white"><?php echo '<img src="'.$fila["imagen"].'" width="150" heigth="150">'?></font></center></td>
<td width=100%><center><font color="white">C&Oacute;DIGO: <?php echo $fila["codigo"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<center><font color="white">MARCA: <?php echo $fila["marca"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">MODELO: <?php echo $fila["modelo"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">COLOR: <?php echo $fila["color"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">PULGADAS: <?php echo $fila["pulgadas"];?></font><br>
<font color="white">MEMORIA: <?php echo $fila["memoria"]; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">C&Aacute;MARA: <?php echo $fila["camara"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">PRECIO: <?php echo $fila["precio"];?></font></center>

</tr>

<?php
}

?>
</td>

</td>

</tr>
</table>
</td></center>

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