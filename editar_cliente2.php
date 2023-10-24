<?php
include("conexion.php");
$conectar=conectar();

$id=$_POST['txtid'];
$nombre=$_POST['txtnombre'];
$apellido=$_POST['txtapellido'];
$edad=$_POST['txtedad'];
$telefono=$_POST['txttelefono'];
$direccion=$_POST['txtdireccion'];
$pais=$_POST['txtpais'];
$cuidad=$_POST['txtciudad'];
$correo=$_POST['txtcorreo'];

$cmd="UPDATE tb_cliente SET nombre='$nombre',apellido= '$apellido', edad='$edad', telefono='$telefono', direccion='$direccion', pais='$pais',ciudad='$cuidad', correo='$correo' WHERE id=$id";	

$respuesta=mysqli_query($conectar, $cmd);
if($respuesta)
{
header("location: index.php");	
}
else
{
	printf("Error al Actualizar...");
	echo "Error"or die("Error".mysql.error()) ;
}



?>