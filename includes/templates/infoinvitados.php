

<section class="contenedor">
    <div class="seccion">
  
      <?php
      
        try {
            require_once ('includes/funciones/bd_conexion.php');
            $sql = "SELECT*FROM invitados ";
            $resultado = $conn->query($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
      ?>

      <h2>Nuestros invitados</h2> 
      <ul class="lista-invitados">
        <?php while ($invitados = $resultado->fetch_assoc() ) { ?>
   
            <li>
              <div class="invitado">
              <a class="invitado-info" href="#invitado<?php echo $invitados ['invitado_id'] ?>">
                <img src="img/<?php echo $invitados['url_imagen']?>" alt="invitado">
                <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
              </a>
              </div>
            </li>

            <div style="display:none;">
              <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?> </h2>
                <img src="img/<?php echo $invitados ['url_imagen']?>" alt="invitado">
                <p><?php echo $invitados['descripcion'] ?></p>
              </div><!--cierra invitado-->
            </div><!-- cierra style none-->
        <?php } ?> 
      </ul>
      

      <?php
        $conn->close();
      ?>


    </div>           
  </section>