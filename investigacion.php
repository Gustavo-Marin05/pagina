<?php
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

for ($i = 1; $i <= 10; $i++) {

?>

<br><br><br>
  <div class="container" style="padding: 10px;">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="images/caru2.jpg" class="card-img-top" alt="Investigación 1">
          <div class="card-body">
            <h5 class="card-title">Investigación sobre nuevos tratamientos para la diabetes</h5>
            <p class="card-text">Un equipo de investigadores de la Universidad San Francisco Xavier está desarrollando nuevos enfoques terapéuticos para el tratamiento de la diabetes. Se están explorando estrategias innovadoras para controlar los niveles de glucosa y mejorar la calidad de vida de los pacientes.</p>
            <a href="url_de_la_pagina_1" class="btn btn-primary">Más información</a> <!-- Reemplaza "url_de_la_pagina_1" con la URL a la que deseas conectar -->
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="images/cra.jpg" class="card-img-top" alt="Investigación 2">
          <div class="card-body">
            <h5 class="card-title">Desarrollo de terapias avanzadas para enfermedades cardiovasculares</h5>
            <p class="card-text">Investigadores de la Universidad San Francisco Xavier están liderando proyectos para desarrollar terapias avanzadas para enfermedades cardiovasculares. Se están investigando nuevas formas de prevenir y tratar enfermedades como la hipertensión y la insuficiencia cardíaca.</p>
            <a href="url_de_la_pagina_2" class="btn btn-primary">Más información</a> <!-- Reemplaza "url_de_la_pagina_2" con la URL a la que deseas conectar -->
          </div>
        </div>
      </div>
    </div>
  </div>

<?php

}

include("plantillas/final.php");
?>