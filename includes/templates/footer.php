
  <footer class="site-footer">
    <div class="contenedor">
      <div class="footer-informacion">
        <h3>Sobre <span>gdlwebcam</span></h3>
        <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
      </div>
      <div class="ultimos-tweets">
        <h3>Últimos <span>tweets</span></h3>
        <ul>
          <li>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et.</li>
          <li>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et.</li>
          <li>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et.</li>
        </ul>
      </div>
      <div class="footer-menu">
        <h3>Redes <span>sociales</span></h3>
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
      </div><!--footer-menu-->
    </div><!--contenedor-->
    <p class="copyright">Todos los derechos Reservados GDLWEBCAMP 2016.</p>
  </footer>



  <script src="js/jquery-1.12.0.min.js"></script>
  
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <?php 
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
   if ($pagina == 'invitados'||$pagina == 'index'){
      echo '<script src="js/jquery.colorbox.js"></script>';
   } else if ($pagina == 'conferencia') {
      echo '<script src="js/lightbox.min.js"></script>';
   }
  ?>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>