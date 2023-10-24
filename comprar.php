<?php
include("conexion.php");
$conectar=conectar();


//$codigo=$_POST['NULL'];
$cod_cliente=$_POST['txtid2'];
$cod_articulo=$_POST['txtcodigo3'];
$cantidad=$_POST['txtcantidad3'];
$precio=$_POST['txtprecio3'];
$monto=$precio * $cantidad;
$fecha=$_POST['txtfecha'];

$cmd="INSERT INTO tb_venta VALUES('$codigo','$cod_cliente', '$cod_articulo', '$cantidad','$precio', '$monto', '$fecha')";	
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