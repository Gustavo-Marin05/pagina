<?php
	include("BaseDatos.php");
	
	$bd = new BaseDatos();
	/*
	$titulo = "MAT103";
	$descripcion = "Algebra Lineal y teoria Matricial";
	$imagen = "matriz.png";
	$url = "";
	$estado = "1";
	*/
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$comentario = $_POST["comentario"];
	$sql = "insert into comentario(nombre,email,telefono,comentario)values('$nombre','$email','$telefono','$comentario');";
	//echo $sql;
	
	$rows = $bd->consulta($sql);
	//echo "Datos insertados";
?>