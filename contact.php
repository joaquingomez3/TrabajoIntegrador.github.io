<?php
if (isset($_POST['email']) &&!empty($_POST['email'])) {
  $subject = "Nuevo formulario enviado";
  $body = "Nombre: ". $_POST['nombre']. "\nEmail: ". $_POST['email']. "\nMensaje: ". $_POST['body'];
  mail("gomezgonzalod46@gmail.com", $subject, $body);
}
?>