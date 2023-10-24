<?php
require ("conexion.php");
$conectar=conectar();
$codigo=$_POST['txtcodigo'];
$cmd="delete from tb_articulo where codigo='$codigo' ";
$resultado=mysqli_query($conectar, $cmd);
if ($resultado)
	{
		header ("location: index.php");
	}
	else
	{
	echo "Error al Eliminar";
	}


?>