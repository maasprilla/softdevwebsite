<?php
  $sendTo = "softdevcorporation@gmail.com";
  $subject = "Mensaje de contacto";
  $titulo = "Alguien se ha contactado con usted";
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $service = $_POST["service"];
  $comment = $_POST["comments"];
  $message = "\nAlguien se ha contactado con usted:" . "\nNombre: " . $name . "\nTeléfono: " . $phone . "\nEmail: " . $email . "\nDirección: " . $address . "\nCiudad: " . $city . "\nServicio: " . $service . "\nComentario: " . $comment;
  mail($sendTo, $subject, $message);
  header('Location: ./cotizacion.php');
?>