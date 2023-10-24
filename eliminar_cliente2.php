<?php
require ("conexion.php");
$conectar=conectar();
$id=$_POST['txtid'];
$cmd="delete from tb_cliente where id='$id' ";
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