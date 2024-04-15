<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigacion</title>

    <link rel="stylesheet" href="css/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
    include('plantillas/menu.php') 
    ?>

    

<style>
        .card-img-top {
          height: 200px; /* Ajusta la altura según tus necesidades */
          object-fit: cover;
        }
        .navbar-custom {
    background-color: #071f69 !important;
      </style>
     
     <?php

     for($i=1;$i<=100;$i++){
     
     ?>
          <div class="container">
             <div class="row">
               <div class="col-12 col-md-6">
                 <div class="card">
                   <img src="https://th.bing.com/th/id/R.0951c5037774db3e27cc342f3fe5df8e?rik=KIH%2faesAV0EE1w&riu=http%3a%2f%2fimg.europapress.net%2ffotoweb%2ffotonoticia_20150921124337_1280.jpg&ehk=swmDx6fPd0NwSryfBWTYTm5hTWkip238sWfOBS2IIEk%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Investigación 1">
                   <div class="card-body">
                     <h5 class="card-title">Investigación sobre nuevos tratamientos para la diabetes</h5>
                     <p class="card-text">Un equipo de investigadores de la Universidad San Francisco Xavier está desarrollando nuevos enfoques terapéuticos para el tratamiento de la diabetes. Se están explorando estrategias innovadoras para controlar los niveles de glucosa y mejorar la calidad de vida de los pacientes.</p>
                     <a href="url_de_la_pagina_1" class="btn btn-primary">Más información</a> <!-- Reemplaza "url_de_la_pagina_1" con la URL a la que deseas conectar -->
                   </div>
                 </div>
               </div>
               <div class="col-12 col-md-6">
                 <div class="card">
                   <img src="https://th.bing.com/th/id/R.be770039c957cd523a727ca0e238828b?rik=WXllR%2fUhoT%2fHsg&riu=http%3a%2f%2fwww.hamedanpayam.com%2fgalery%2fnewscontent%2f0xdea168acc81c684c_0.jpg&ehk=BnXw%2b8i%2fSDFMHn%2bSRI4E61zOufeuQCJrqiVuAw4bggc%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Investigación 2">
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
     
     ?>
</body>
</html>