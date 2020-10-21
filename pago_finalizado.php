<?php 
  include_once 'includes/templates/header.php'; 
  use PayPal\Rest\ApiContext;
  use PayPal\Api\PaymentExecution;
  use PayPal\Api\Payment;
  require 'includes/configPayPal.php';
?>

  <section class="contenedor">
    <h2 class="seccion">Resumen Registro</h2> 

      <?php
          $paymentId = $_GET['paymentId'];
          $id_pago = (int) $_GET['id_pago'];

          //Peticion a REST API
          $pago = Payment::get($paymentId, $apiContext);
          $execution = new PaymentExecution();
          $execution->setPayerId($_GET['PayerID'] );

          $resultado = $pago->execute($execution, $apiContext);

          /*echo"<pre>";
          var_dump($resultado);
          echo"</pre>";
          */ 
          
          $respuesta = $resultado->transactions[0]->related_resources[0]->sale->state;

          //var_dump($respuesta);

          if($respuesta == "completed") {
              echo "<div class='resultado correcto'>";
              echo "El pago se realizo correctamente <br/>";
              echo "el ID es {$paymentId}";
              echo "</div>";

              //cuando el pago se haga efectivo el registro en mi DB tiene que aaparecer pagado
              require_once('includes/funciones/bd_conexion.php');
              $stmt = $conn->prepare('UPDATE registrados SET pagado = ? WHERE ID_Registrado = ? ');
              $pagado = 1;
              $stmt->bind_param('ii', $pagado, $id_pago);
              $stmt->execute();
              $stmt->close();
              $conn->close();
          } else {
              echo "<div class='resultado error'>";
              echo "El pago no se realizo";
              echo "</div>";
          }
      ?>
  </section>

<?php include_once 'includes/templates/footer.php'; ?>
