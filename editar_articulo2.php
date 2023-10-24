<?php
include("conexion.php");
$conectar=conectar();

$ruta="imagenes/img_articulo/";
$nom=$_POST['txtimagen'];
$archivo=$_FILES['txtimagen']['tmp_name'];
$nom_archivo=$_FILES['txtimagen']['name'];
$ext=  pathinfo($nom_archivo);
//$subir = move_uploaded_file($archivo,$ruta."/".$nom.".".$ext['extension']);
$subir = move_uploaded_file($archivo,$ruta."/".$nom_archivo);

//$foto=$_FILES["txtimagen"]["name"];
//$ruta=$_FILES["txtimagen"]["tmp_name"];

//copy($ruta,$destino);

$codigo=$_POST['txtcodigo'];
$marca=$_POST['txtmarca'];
$modelo=$_POST['txtmodelo'];
$color=$_POST['txtcolor'];
$pulgadas=$_POST['txtpulgadas'];
$memoria=$_POST['txtmemoria'];
$camara=$_POST['txtcamara'];
$precio=$_POST['txtprecio'];
$destino="Imagenes/img_articulo/".$nom_archivo;

$cmd="UPDATE tb_articulo SET marca='$marca', modelo='$modelo', color='$color', pulgadas='$pulgadas', memoria='$memoria', camara='$camara', precio='$precio', imagen='$destino' WHERE codigo=$codigo";
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