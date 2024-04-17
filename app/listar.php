<?php

include("BaseDatos.php");
$bd =new BaseDatos();
$rows =$bd->consulta("SELECT * FROM `targetas`");
foreach($rows as $d){
    echo $d['id']." ".$d['titulo']."</br>";
}

?>