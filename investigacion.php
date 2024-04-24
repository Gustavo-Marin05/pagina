<?php
$titulo = 'Investigacion';
include("app/BaseDatos.php");
include("plantillas/inicio.php");
include("plantillas/menu.php");


$bd = new BaseDatos();
$rows = $bd->consulta("SELECT * FROM `targetas`");
$imagen = $bd->consulta("SELECT * FROM `imagenes`");



?>



<style>
  .card-img-top {
    height: 200px;
    /* Ajusta la altura según tus necesidades */
    object-fit: cover;
  }
</style>

<div>
  <img src="images/<?php echo $imagen[1]['imagendef']; ?>" class="img-fluid" alt="">
  <div class="text-container">

    <h1 class="mar" styles="width: 100vw; height: auto; overflow:hidden;">INVESTIGACION</h1>
    <h4>La Facultad de Medicina te ofrece nuestro plan de estudio, perfil de la carrera, modalidad de admicion y graduacion</h4>
    

  </div>
  
</div>




<br><br>
<div class="container" style="padding: 20px;">
  <div class="row">

    <?php //al colocar este codigo php en esta parte las cartas se ordenaran de izquierda a derecha en vez de arriba hacia abajo

    foreach ($rows as $d) {
      //echo $d['id']." ".$d['titulo']."</br>";
    ?>
      <div class="col-md-6">
        <div class="card mb-6">
          <img src="images/<?php echo $d['imagen'] ?>" class="card-img-top" alt="Investigación 1"><!--aqui agregamos la imagenes de forma dimanica accediendo a la base de datos -->
          <div class="card-body">
            <h5 class="card-title"><?php echo $d['titulo']; ?></h5><!--aqui se agregara el titulo de cada card-->
            <p class="card-text"><?php echo $d['descripcion']; ?></a> <!--y esta sera su descripcion todo se encuentra guardado en la base de datos-->
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>


<footer class="footer">
    <h3>USFX Medicina 2024</h3>
</footer>


<?php

include("plantillas/final.php");
?>