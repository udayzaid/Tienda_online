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

$cmd="INSERT INTO tb_cliente VALUES('$id','$nombre', '$apellido', '$edad', '$telefono', '$direccion', '$pais','$cuidad', '$correo')";	
$respuesta=mysqli_query($conectar, $cmd);
if($respuesta)
{
header("location: index.php");	
}
else
{
	printf("Error al Guardar...");
	printf("Error al Guardar..." or die("Error".mysql_error()));
}

?>