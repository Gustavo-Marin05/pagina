<?php
include("plantillas/inicio.php"); //esto incluye el inicio del HTML 
include("app/BaseDatos.php");
include('plantillas/menu.php');
$bd = new BaseDatos();


$rows = $bd->consulta("SELECT * FROM `comentario`");
$imagen = $bd->consulta("SELECT * FROM `imagenes`");
?>




<!--desde aquie se encuntra la imajen de fondo-->

<div styles="width: 100vw; height: auto; overflow:hidden;">
  <img src="images/<?php echo $imagen[1]['imagendef']; ?>" class="img-fluid" alt=""><!--con esto se esta accediendo a la imagen 2 de la base de datos-->
  <div class="text-container">
    <h1 class="mar">FACULTAD DE MEDICINA</h1>
    <h4>universidad mayor real y pontificia san francico xavier de chuquisaca</h4>
  </div>

</div>

<br>
<br>
<br>
<br>


<!--desde aqui comienza lo de bienvenido-->

<div class="section margin-top_50">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="full">
          <div class="heading_main ">
            <h1 class="hol" style="text-align: center;background-color: #071f69 !important;border-radius: 20px;">¡ Bienvenido !</h1>
          </div>
          <div class="full" style="padding: 20px;">
            <p>¡Bienvenido/a a nuestra comunidad de estudios de medicina!</p>

            <p>En este espacio dedicado a la medicina, te ofrecemos recursos de alta calidad para tu aprendizaje y desarrollo profesional. Desde conceptos básicos hasta los avances más recientes, aquí encontrarás todo lo que necesitas para avanzar en tu carrera.</p>
            <p>Te invitamos a explorar, aprender y compartir tus experiencias con nuestra comunidad. Estamos aquí para apoyarte en cada paso del camino hacia una carrera exitosa en el campo de la medicina.</p>
            <p>¡Únete a nosotros y comencemos este emocionante viaje juntos!</p>

          </div>

        </div>

      </div>
      <div class="col-md-6" style="text-align: right;">
        <img src="images/<?php echo $imagen[5]['imagendef']; ?>" alt="imagen" style="width: 90%; border-radius:20px !important;" class="rounded float-end">
      </div>


    </div>
  </div>
</div>

<br>
<br>
<br>


<!-- desde aqui comieza la aplicar-->

<div class="section margin-top_50">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="text-align: right;">
        <img src="images/<?php echo $imagen[6]['imagendef']; ?>" alt="imagen" style="width: 90%; border-radius:20px !important;" class="rounded float-end">
      </div>
      <div class="col-md-6">
        <div class="full">
          <div class="heading_main ">
            <h1 class="hol" style="text-align: center;background-color: #071f69 !important;border-radius: 20px;">Aplica YA !</h1>
          </div>
          <div class="full" style="padding: 20px;">
            <p>Aplicar a la universidad de medicina es el primer paso hacia una carrera dedicada a salvar vidas y mejorar la salud de las personas. A través de una educación rigurosa y práctica, podrás adquirir los conocimientos y habilidades necesarias para convertirte en un profesional médico competente y compasivo. ¡Empieza tu viaje hacia una carrera gratificante en el campo de la medicina hoy mismo!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>


<!-- desde aqui comienza el carrucel-->


<div style="text-align: center; background-color: #071f69 ; padding: 5px; width: 25%;margin: 0px auto; border-radius: 20px; color: aliceblue;">
  <h2>Nuevo</h2>
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>



    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/tecno.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div style="background-color: aliceblue;color: #071f69; border-radius: 20px;">
            <h2><b>Tecnología</b></h2>
            <p>Tendras acceso a la ultima tecnologia de punta en medicina</p>
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/caru.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

          <div style="background-color: aliceblue;color: #071f69; border-radius: 20px;">
            <h2><b>Educacion</b></h2>
            <p>contamos con los mejores docentes capaces de enseñarte lo mejor de esta area</p>
          </div>

        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<h2 style="text-align: center;">COMENTARIOS</h2>


<?php //al colocar este codigo php en esta parte las cartas se ordenaran de izquierda a derecha en vez de arriba hacia abajo
//$rows = $bd->consulta("SELECT * FROM `comentario`");
$count = 0;
foreach ($rows as $d) {
  if ($count >= 2) { // Salimos del bucle si ya hemos mostrado dos comentarios
    break;
  }


?>


  <div class="container" style="border: #071f69; background-color: #071f69; padding: 15px; border-radius: 10px;">
    <div class="row">


      <div class="col-md-12">
        <div class="card mb-6">
          <div class="card-body">
            <h5 class="card-title"><?php echo $d['nombre']; ?></h5><!--aqui se agregara el titulo de cada card-->
            <p class="card-text"><?php echo $d['comentario']; ?></a> <!--y esta sera su descripcion todo se encuentra guardado en la base de datos-->
          </div>
        </div>
      </div>


    </div>
  </div>
<?php $count++; // Incrementamos el contador después de mostrar cada comentario
}
?>
<br><br>



<!--
    ------------------------------------------------------------------------------------------------------
    todo esto es el pie de pagina
  -->



<footer class="footer">
  <!-- Sección 1 del pie de página -->
  <div class="footer-section">
    <h3>Contactos</h3>
    <p>Telf./Fax. (591)(4) 6441541 / Telf. 6453308</p>
    <p>Telf. 6461787 (Relaciones Públicas)</p>
    <h2>Direccion</h2>
    <img src="images/mapa.jpeg.jpg" class="footer-img">
    <p>
      Calle Junín esq. Estudiantes
      Sucre, Bolivia
    </p>
  </div>

  <!-- Sección 2 del pie de página -->
  <div class="footer-section">
    <h3>Redes Sociales</h3>
    <a href="https://www.facebook.com/FranciscoXavierCh/">
      <img src="images/facebook.png" class="footer-linkimg">
    </a>
    <p>Facebook</p>
    <a href="https://t.me/canalusfx">
      <img src="images/telegram.png" class="footer-linkimg">
    </a>
    <p>Telegram</p>
    <a href="https://instagram.com/usfx.oficial?igshid=YmMyMTA2M2Y=">
      <img src="images/Instagram.png" class="footer-linkimg">
    </a>
    <p>Instagram</p>
    <h3>Accesos</h3>
    <a href="https://si2.usfx.bo/suniver/web/Cuenta/security/login">
      <img src="images/xampp.png" class="footer-linkimg">
    </a>
    <p>Suniver</p>
    <a href="https://ecampus.usfx.bo/login/index.php">
      <img src="images/ecampus.png" class="footer-linkimg">
    </a>
    <p>E-campus</p>
  </div>

  <!-- Sección 3 del pie de página -->
  <div class="footer-section">
    <h2>Comentarios</h2>
    <div class="comment_btn">
      <form method="POST" action="app/guardarComment.php">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"><br>
        <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Comentario" style="height: 200px; top: 0px;">
        <button type="submit" style="color: white ; background-color: gray; border: none; border-radius:10px;">Enviar</button>
      </form>
    </div>
    <img src="images/400a.png" class="footer-img">
    <img src="images/usfx.png" class="footer-img">

  </div>
</footer>







<?php
include("plantillas/final.php") //esto incluye el final del HTML
?>