<?php include_once 'includes/templates/header.php'; ?>

  <section class="contenedor">
    <div class="seccion">
    
      <h2>Calendario de Eventos</h2>

      <?php
      
        try {
            require_once ('includes/funciones/bd_conexion.php');
            $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_inv = invitados.invitado_id ";  
            $sql .= " order by evento_id ";
            $resultado = $conn->query($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
      
      ?>

      <div class="calendar">
        <?php
            $calendario = array();
            while ( $eventos = $resultado->fetch_assoc()) { 

              $fecha = $eventos['fecha_evento'];

              $evento = array (
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' => $eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'icono' => $eventos ['icono'],
                'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
              );     

              $calendario[$fecha] [] = $evento;
         ?>

        <?php } //cierra el while del fetch_assoc ?> 

        <?php 
          //imprimir todos los eventos con el foreach

          foreach($calendario as $dia => $lista_eventos) { ?>

            <h3>
              <i class="far fa-calendar-alt"></i>
              <?php 
              
              //Unix
              setlocale(LC_TIME, 'es_ES.UTF-8');

              //Windows
              setlocale(LC_TIME, 'spanish');

              echo strftime("%d de %B del 2020", strtotime ($dia)); ?>
            </h3>

            <div class="contenedor-dia">
              <?php 
                foreach($lista_eventos as $evento) { ?>
                
              
                <div class="dia">
                  <p class="titulo"><?php echo $evento ['titulo']; ?></p>

                  <p class="hora">
                    <i class="fas fa-clock" aria-hidden="true"></i>
                    <?php echo $evento ['fecha'] . " " . $evento['hora']; ?>
                  </p>

                  <p>
                    <i class="fas <?php echo $evento ['icono']; ?>" aria-hidden="true"></i>
                    <?php echo $evento ['categoria']; ?>
                  </p>

                  <p>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php echo $evento ['invitado']; ?>
                  </p>
                
                </div> <!--cierra clase dia-->
                
              <?php  } // cierra foreach de $lista_eventos ?>
            </div> <!--cierra clase contenedor-dia-->
          <?php } //cierra el foreach de $dia ?>
         
         
      </div> <!--cierra clase calendario-->
      

      <?php
        $conn->close();
      ?>


    </div>           
  </section>

<?php include_once 'includes/templates/footer.php'; ?>