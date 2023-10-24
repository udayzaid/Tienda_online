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
<table  width=100%  height=70% border=2>
<tr background="imagenes/fondo4.jpg" height=70%>
<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO PARTE IZQUIERDA  >>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=10% >
<!--<img src="imagenes/base.png"  width=90% > -->

</td>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO CENTRO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td><center>
<table   border="2" >
<tr>

<td colspan="10"><center><font color="white"><b>VENTAS</b></font></center></td>
</tr>

<tr><font color=white>
		<td><b><center><font color=white>Codigo</font></center></b></td>
		<td><b><center><font color=white>Id cliente</font></center></b></td>
		<td><b><center><font color=white>Cod_articulo</font></center></b></td>
		<td><b><center><font color=white>Cantidad</font></center></b></td>
		<td><b><center><font color=white>Precio Unit</font></center></b></td>
		<td><b><center><font color=white>Monto</font></center></b></td>
		<td><b><center><font color=white>Fecha</font></center></b></td>
		<td colspan ="1"></td>
		</tr> 	 

<?php
include("conexion.php");
$conectar=conectar();
$cmd="select * from tb_venta";
$resultado=mysqli_query($conectar, $cmd);

while ($fila=mysqli_fetch_array($resultado))
{

?>


<tr>
<td><center><font color="white"><?php echo $fila["codigo"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["cod_cliente"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["cod_articulo"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["cantidad"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["precio_unit"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["monto"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["fecha"];?></font></center></td>

<td><a href="eliminar_venta.php ?codigo=<?php echo $fila["codigo"];?>"><font color="red">Eliminar</font></a></td>
</tr>



<?php
}

?>
</td>
</tr>
</table>


<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO PARTE DERECHA  >>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=10%>

</td>
</tr>
</table></center>
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


</body>
</head>
</html>