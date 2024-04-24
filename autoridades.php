<?php
$titulo = 'Autoridades';
include("app/BaseDatos.php");
include("plantillas/inicio.php");
include("plantillas/menu.php");

$bd = new BaseDatos();
$imagen = $bd->consulta("SELECT * FROM `imagenes`");
?>

<div styles="width: 100vw; height: auto; overflow:hidden;">
  <img src="images/<?php echo $imagen[0]['imagendef']; ?>" class="img-fluid" alt="">
  <div class="text-container" style="font-size: 50px;">
    
    <h1 class="mar">AUTORIDADES</h1>
    <h4>Facultad de Medicina</h4>

    
    
  </div>

</div>
<br><br>
<div class="hol" style="text-align: center;background-color: #071f69 !important;border-radius: 20px;padding: 1%;">
  <h2>CONOCE A NUESTRAS AUTORIDADES DE MUESTRA QUERIDA FACULTAD DE MEDICINA</h2>
</div>
<br><br><br>
<div class="text-center">
  <img src="images/<?php echo $imagen[2]['imagendef']; ?>" class="rounded" alt="">
  <div class="row">
    <div class="col-md-12">
    <br><h1>Dr. Freddy David Espada Rivera</h1><br>
      <h4>DECANO DE LA FACULTAD DE MEDICINA</h4>
    </div>

  </div>
</div>
<br><br><br><br>
<div class="text-center">
  <img src="images/<?php echo $imagen[3]['imagendef']; ?>" class="rounded" alt="" style="width: 18%;">
  <div class="row">
    <div class="col-md-12"><br>
      <h1>Dr. Ledezma Reyes Ruddyard Simón</h1><br>
      <h4>DIRECTOR DE LA CARRERA DE MEDICINA</h4>
    </div>

  </div>
</div>
<br><br><br>

<footer class="footer">
  <h3>USFX Medicina 2024</h3>
</footer>







<?php
include("plantillas/final.php");
?>