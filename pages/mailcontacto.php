<?php
  $sendTo = "softdevcorporation@gmail.com";
  $subject = "Mensaje de contacto";
  $titulo = "Alguien se ha contactado con usted";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comments"];
  $message = "\nAlguien se ha contactado con usted:" . "\nNombre: " . $name . "\nEmail: " . $email . "\nComentario: " . $comment;
  mail($sendTo, $subject, $message);
  header('Location: ./contacto.php');
?>