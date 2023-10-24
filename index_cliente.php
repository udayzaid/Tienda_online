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
<td width=5% >
<!--<img src="imagenes/base.png"  width=90% > -->

</td>

<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO CENTRO  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td><center>
<table   border="2" >
<tr>
<td ><center><a href="nuevo_cliente.php"><img src="imagenes/cliente.png" height=20% width=20%></a><font color=white>Nuevo</font></center></td>
<td colspan="10"><center><font color="white"><b>CLIENTES</b></font></center></td>
</tr>

<tr>
		<td><b><center>Id</center></b></td>
		<td><b><center>Nombre</center></b></td>
		<td><b><center>Apellido</center></b></td>
		<td><b><center>Edad</center></b></td>
		<td><b><center>Telefono</center></b></td>
		<td><b><center>Direccion</center></b></td>
		<td><b><center>Pais</center></b></td>
		<td><b><center>Cuidad</center></b></td>
		<td><b><center>E-Mail</center></b></td>
		<td colspan ="2"></td>
		</tr> 	 

<?php
include("conexion.php");
$conectar=conectar();
$cmd="select * from tb_cliente";
$resultado=mysqli_query($conectar, $cmd);

while ($fila=mysqli_fetch_array($resultado))
{

?>


<tr>
<td><center><font color="white"><?php echo $fila["id"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["nombre"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["apellido"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["edad"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["telefono"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["direccion"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["pais"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["ciudad"];?></font></center></td>
<td><center><font color="white"><?php echo $fila["correo"];?></font></center></td>

<td><a href="editar_cliente.php ?id=<?php echo $fila["id"];?>"><font color="lime">Editar</font></a></td>
<td><a href="eliminar_cliente.php ?id=<?php echo $fila["id"];?>"><font color="red">Eliminar</font></a></td>
</tr>



<?php
}

?>
</td>

</tr>
</table>


<!--  ------------------ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  CUERPO PARTE DERECHA  >>>>>>>>>>>>>>>>>>>>>>>>>>>-----------------     -->
<td width=5%>

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