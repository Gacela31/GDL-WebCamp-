<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <?php 
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if ($pagina == 'invitados'||$pagina == 'index'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
   } else if ($pagina == 'conferencia') {
      echo '<link rel="stylesheet" href="css/lightbox.min.css">';
   }
  ?>
  <link rel="stylesheet" href="css/main.css">
  

  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">

  <header class="site-header">
      <div class="contenido-header contenedor">
        <nav class="redes-sociales">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-pinterest-p"></i>
          </a>
          <a href="#">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </nav>
        <div class="informacion-evento">
          <p class="fecha"><i class="fas fa-calendar-alt"></i>10-12 DIC, 2020</p>
          <p class="lugar"><i class="fas fa-map-marker-alt"></i>Salta, AR</p> 
        </div><!--informacion-evento--> 
        <h1 class="nombre-sitio">GDLWEBCAMP</h1>
        <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
      </div><!--contenido-header-->
  </header>

  <div class="barra">
    <div class="contenedor">
      <div class="contenido-principal">
        <div class="mobile-first">
          <div class="logo">
              <a href="index.php">
                 <img src="img/logo.svg" alt="Logo Principal">
               </a>
          </div>
          <div class="menu-movil">
            <a href="#navegacion">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div><!--mobile-first-->
        <nav id="navegacion" class="navegacion-principal">
          <a href="conferencia.php">conferencia</a>
          <a href="calendario.php">calendario</a>
          <a href="invitados.php">invitados</a>
          <a href="registro.php">reservaciones</a>
        </nav>
      </div><!--contenido-principal-->
    </div><!--contenedor-->
  </div><!--barra-->