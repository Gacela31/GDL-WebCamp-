<?php include_once 'includes/templates/header.php'; ?>  

  <section class="contenedor">
    <div class="seccion">
      <h2>La mejor conferencia de diseño web en español</h2>
      <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
    </div>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div>
    
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="navegacion-programa">
            <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
            <a href="#seminario"><i class="fas fa-university"></i>Seminario</a>
          </nav> 
        
          <div id="talleres" class="info-curso ocultar">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y JavaScript</h3>
              <p><i class="far fa-clock"></i>14:00</p>
              <p><i class="fas fa-calendar"></i>2020-12-06</p>
              <p><i class="fas fa-user"></i>Gimena Sanchez Villalba</p>
            </div>

            <div class="detalle-evento">
              <h3>WordPress</h3>
              <p><i class="far fa-clock"></i>16:00</p>
              <p><i class="fas fa-calendar"></i>2020-12-07</p>
              <p><i class="fas fa-user"></i>Gimena Sanchez Villalba</p>
            </div> 
          </div><!--#talleres-->

          <div id="conferencias" class="info-curso ocultar">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="far fa-clock"></i>10:00</p>
              <p><i class="fas fa-calendar"></i>2020-12-10</p>
              <p><i class="fas fa-user"></i>Gregorio Sánchez</p>
            </div>

            <div class="detalle-evento">
              <h3>Tecnologías del futuro</h3>
              <p><i class="far fa-clock"></i>17:00</p>
              <p><i class="fas fa-calendar"></i>2020-12-10</p>
              <p><i class="fas fa-user"></i>Susan Sánchez</p>
            </div> 
          </div><!--#conferencias-->

          <div id="seminario" class="info-curso ocultar">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para móviles</h3>
              <p><i class="far fa-clock"></i>17:00</p>
              <p><i class="fas fa-calendar"></i>2020-12-11</p>
              <p><i class="fas fa-user"></i>Harold Garcia</p>
            </div>

            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="far fa-clock"></i>10:00</p>
              <p><i class="fas fa-calendar"></i>2020-12-11</p>
              <p><i class="fas fa-user"></i>Susana Rivera</p>
            </div> 
          </div><!--#seminario-->

          
          <div class="btn-derecha">
            <a href="#" class="boton">Ver Todos</a>
          </div>
        </div><!--programa-evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
  </section><!--programa-->

  <section class="contenedor">
    
      <h2>Nuestros invitados</h2>
      <ul class="lista-invitados">
        <li>
          <div class="invitado">
            <img src="img/invitado1.jpg" alt="invitado">
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado2.jpg" alt="invitado">
            <p>Sharri Herrera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado3.jpg" alt="invitado">
            <p>Gregorio Sanchez</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado4.jpg" alt="invitado">
            <p>Susana Rivera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado5.jpg" alt="invitado">
            <p>Harold Garcia</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado6.jpg" alt="invitado">
            <p>Susan Sanchez</p>
          </div>
        </li>
      </ul>
  </section>

  <section class="seccion contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Talleres</li>
        <li><p class="numero"></p>Dias</li>
        <li><p class="numero"></p>Conferencias</li>
      </ul>
    </div>
  </section>

  <section class="precios seccion">
    <h2>precios</h2>
    <div class="contenedor">
      <ul class="lista-precios">
        <li>
          <div class="precio">
            <h3>pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las Conferencias</li>
              <li><i class="fas fa-check"></i>Todos los Talleres</li>
            </ul>
            <a href="#" class="boton hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="precio">
            <h3>todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las Conferencias</li>
              <li><i class="fas fa-check"></i>Todos los Talleres</li>
            </ul>
            <a href="#" class="boton">Comprar</a>
          </div>
        </li>

        <li>
          <div class="precio">
            <h3>pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
              <li><i class="fas fa-check"></i>Todas las Conferencias</li>
              <li><i class="fas fa-check"></i>Todos los Talleres</li>
            </ul>
            <a href="#" class="boton hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div> 
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor"> 
      <div class="testimonial">
        <blockquote>
          <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies. </p>
          <footer class="info-testimonial" > 
            <img src="img/testimonial.jpg" alt="foto testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma </span></cite>
          </footer>
        </blockquote>
      </div>

      <div class="testimonial">
        <blockquote>
          <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies. </p>
          <footer class="info-testimonial">
            <img src="img/testimonial.jpg" alt="foto testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma </span></cite>
          </footer>
        </blockquote>
      </div>

      <div class="testimonial">
        <blockquote>
          <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies. </p>
          <footer class="info-testimonial">
            <img src="img/testimonial.jpg" alt="foto testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma </span></cite>
          </footer>
        </blockquote>
      </div>
    </div> <!--testimoniales-->
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>registrate al newsletter:</p>
      <h3>gdlwebcam</h3>
      <a href="#" class="boton transparente">Registro</a>
    </div>
  </div>
  
  <section class="seccion">
    <h2>Faltan</h2>
    <div class="contenedor cuenta-regresiva">
      <ul>
        <li><p id="dias" class="numero"></p>dias</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>
      </ul>
    </div>
  </section>

<?php include_once 'includes/templates/footer.php'; ?>