<?php
if (isset($_POST['email']) &&!empty($_POST['email'])) {
  $subject = "Nuevo formulario enviado";
  $body = "NOMBRE: ". $_POST['nombre']. "\nTELEFONO: ". $_POST['telefono']. "\nDIRECCION: ". $_POST['direccion']. "\nPEDIDO: ". $_POST['pedido'];
  mail("gomezgonzalod46@gmail.com", $subject, $body);
}
?>