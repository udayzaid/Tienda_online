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
<td width=5% >
<!--<img src="imagenes/base.png"  width=90% > -->

</td>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO CENTRO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=40%><center>
<?php
    $id=$_POST['txtid'];
	require ("conexion.php");
	$conectar=conectar();
	$cmd="select * from tb_cliente where id=$id ";
	$resultado=mysqli_query($conectar, $cmd);
	if($resultado)
	{
		$fila=mysqli_fetch_array($resultado);
	}
	else
	{
		echo "Error";
	}
	?>
<table  width=40%  height=40% border="2">
<tr>
<p><h1><center>REGISTRO VENTAS</center></h1>
<p><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATOS CLIENTE</h3>
<form enctype="multipart/form-data" method=POST action="comprar.php">


<tr>
<td><font color=white>Id &nbsp;&nbsp;</font></td>
<td><input type=TEXT REQUIRED name="txtid2" ReadOnly="true" value="<?php echo $fila['id'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Nombre &nbsp;&nbsp;</font></td>
<td><input type=TEXT REQUIRED name="txtnombre2" ReadOnly="true" value="<?php echo $fila['nombre'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Apellido</font> </td>
<td><input type=TEXT REQUIRED name="txtapellido2" ReadOnly="true" value="<?php echo $fila['apellido'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Edad</font> </td>
<td><input type=TEXT REQUIRED name="txtedad2" ReadOnly="true" value="<?php echo $fila['edad'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Telefono</font> </td>
<td><input type=TEXT REQUIRED name="txttelefono2"  ReadOnly="true" value="<?php echo $fila['telefono'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Direcci&oacute;n</font> </td>
<td><input type=TEXT REQUIRED name="txtdireccion2"ReadOnly="true" value="<?php echo $fila['direccion'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Pa&iacute;s</font> </td>
<td><input type=TEXT  REQUIRED name="txtpais2" ReadOnly="true" value="<?php echo $fila['pais'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>Cuidad</font> </td>
<td><input type=TEXT   REQUIRED name="txtciudad2"ReadOnly="true" value="<?php echo $fila['ciudad'];?>"/><br></td>
</tr>
<tr>
<td><font color=white>E-Mail</font> </td>
<td><input type=TEXT REQUIRED name="txtcorreo2" ReadOnly="true" value="<?php echo $fila['correo'];?>"><br></td>
</tr>
<!-- 
<tr width=100%>

<td colspan=2><center><input type="submit" value="Aceptar"></center></td>
</tr>
-->

<td>
<?php
   $codigo=$_POST['txtcodigon'];
	//require ("conexion.php");
	//$conectar=conectar();
	$cmd="select * from tb_articulo where codigo=$codigo ";
	$resultado=mysqli_query($conectar, $cmd);
while ($fila1=mysqli_fetch_array($resultado))
{

?>
<tr>
<td width=150><center><font color="white"><?php echo '<img src="'.$fila1["imagen"].'" width="150" heigth="150">'?></font></center></td>
<!-- 
<td width=100%><center><font color="white">C&Oacute;DIGO: <?php echo $fila1["codigo"];?></font>
-->
<td width=100%><center><?php  $c=$fila1["codigo"];?>
<center><font color="white">MARCA:&nbsp; <?php echo $fila1["marca"];?></font><br>
<font color="white">MODELO: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fila1["modelo"];?></font><br>
<font color="white">COLOR:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $fila1["color"];?></font><br>
<font color="white">PULGADAS:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $fila1["pulgadas"];?></font><br>
<font color="white">MEMORIA: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fila1["memoria"]; ?></font><br>
<font color="white">C&Aacute;MARA: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fila1["camara"];?></font>&nbsp;&nbsp;&nbsp;&nbsp;
<!-- 
<font color="white">PRECIO: <?php echo $fila1["precio"];?></font></center>
-->
<?php  $p=$fila1["precio"];?>
</center>
</tr>

<?php
}

?>
</td>
</td>

<font color=white ><?php $f=date("y/n/j h:i");?></font>
<tr>
<td><center>Fecha</center></td>
<td><center><font color="white"><input type="time" ReadOnly="true"  name="txtfecha" value="<?php echo "$f"; ?>"></font></center></td>
</tr>
<tr>
<td><center>Codigo Articulo</center></td>
<td><center><font color="white"><input type=TEXT ReadOnly="true"name="txtcodigo3" value="<?php echo "$c"; ?>"></font></center></td>
</tr>
<tr>
<td><center>Precio</center></td>
<td><center><font color="white"><input type=TEXT ReadOnly="true"name="txtprecio3" value="<?php echo "$p" ?>"></font></center></td>
</tr>
<tr>
<td><center>Cantidad</center></td>
<td><center><input type=TEXT name="txtcantidad3" value="1" Align="center" ></center></td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" value="COMPRAR"></center></td>
</tr>
<!-- 
<td colspan="2"><center><input type="submit"  ReadOnly="true" value="COMPRAR"></center><br></td>
-->
</tr>
</table>
</td></center>

</form>


<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO PARTE DERECHA  >>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=5%>

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