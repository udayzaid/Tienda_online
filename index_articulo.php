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
<!--<img src="imagenes/base.png"  width=90% > --!>

</td>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO CENTRO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td><center>
<table   border="2" >
<tr>
<td ><center><a href="nuevo_articulo.php"><img src="imagenes/nuevo.png" height=20% width=20%></a><font color=white>Nuevo</font></center></td>
<td colspan="10"><center><font color="white"><b>ARTICULOS</b></font></center></td>
</tr>

<tr height=20% >

<td><center><font color="white"><b>Imagen</b></font></center></td>
<td><center><font color="white"><b>Descripci&oacute;n</b></font></center></td>


<td colspan="2"></td>

</tr>
<tr>
<td colspan="9"></td>
</tr>
<?php
include("conexion.php");
$conectar= conectar();
$cmd="select * from tb_articulo";
$resultado=mysqli_query($conectar,$cmd);

while ($fila=mysqli_fetch_array($resultado))
{

?>
<tr>
<td width=150><center><?php echo '<img src="'.$fila["imagen"].'" width="150" heigth="150">'?><a href="nueva_venta.php ?codigo=<?php echo $fila["codigo"];?>"><font color="white">Comprar</font></a></center></td>
<td width=100%><center><font color="white">C&Oacute;DIGO: <?php echo $fila["codigo"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<center><font color="white">MARCA: <?php echo $fila["marca"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">MODELO: <?php echo $fila["modelo"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">COLOR: <?php echo $fila["color"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">PULGADAS: <?php echo $fila["pulgadas"];?></font><br>
<font color="white">MEMORIA: <?php echo $fila["memoria"]; ?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">C&Aacute;MARA: <?php echo $fila["camara"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white">PRECIO: <?php echo $fila["precio"];?></font></center>

<td><a href="editar_articulo.php ?codigo=<?php echo $fila["codigo"];?>"><font color="lime">Editar</font></a></td>
<td><a href="eliminar_articulo.php ?codigo=<?php echo $fila["codigo"];?>"><font color="red">Eliminar</font></a></td>
</tr>

<?php
}

?>
</table></center>

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


</body>
</head>
</html>