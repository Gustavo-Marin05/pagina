<?php

/*include("BaseDatos.php");
$bd =new BaseDatos();
$titulo= "mat207";
$descripcion="ecuaciones diferenciales";
$imagen="ecuacon.png";
$url="";
$estado="1";*/
include("BaseDatos.php");
$bd =new BaseDatos();
$titulo=$_POST["titulo"];
$descripcion=$_POST["descripcion"];
$imagen=$_POST["imagen"];
$url=$_POST["url"];
$estado=$_POST["estado"];
$rows =$bd->consulta("INSERT INTO targetas(titulo,descripcion,imagen,url,estado) values('$titulo','$descripcion','$imagen','$url','$estado')");
//echo $sql;
//$rows = $bd->consulta($sql);
//echo "datos insertados";
?>