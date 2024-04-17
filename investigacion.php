
<?php
include("app/BaseDatos.php");
$bd =new BaseDatos();
$rows =$bd->consulta("SELECT * FROM `targetas`");


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

<?php

foreach($rows as $d){
  //echo $d['id']." ".$d['titulo']."</br>";
?>

<br><br>
  <div class="container" style="padding: 20px;">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="images/caru2.jpg" class="card-img-top" alt="Investigación 1">
          <div class="card-body">
            <h5 class="card-title"><?php echo $d['titulo'];?></h5>
            <p class="card-text"><?php echo $d['descripcion']; ?></a> <!-- Reemplaza "url_de_la_pagina_1" con la URL a la que deseas conectar -->
          </div>
        </div>
      </div>
      
    </div>
  </div>

<?php

}

include("plantillas/final.php");
?>