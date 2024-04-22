<?php
include("app/BaseDatos.php");
$titulo='Investigacion';
$bd = new BaseDatos();
$rows = $bd->consulta("SELECT * FROM `targetas`");


include("plantillas/inicio.php");

include('plantillas/menu.php');
?>



<style>
  .card-img-top {
    height: 200px;
    /* Ajusta la altura según tus necesidades */
    object-fit: cover;
  }

  .navbar-custom {
    background-color: #071f69 !important;
  }
</style>



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

<?php

include("plantillas/final.php");
?>