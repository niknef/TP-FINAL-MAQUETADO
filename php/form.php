<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$tripStart = $_POST ['trip-start'];
$tripFinish = $_POST ['trip-finish'];
$pasaje = $_POST ['pasaje'];
$intereses = $_POST ['intereses'];

$mensaje = "<h1>". $nombre . $apellido ."</h1>";
$mensaje .= "<p>". $email ."</p>";
$mensaje .= "<p> Tiene un viaje a Dubái el". $tripStart . "hasta el ". $tripFinish." y esta interesado en un servicio de turismo</p>";
$mensaje .= "<p> Sus intereses son: ". $intereses ."</p>";
$mensaje .= "<p> Comentario: </p>";
$mensaje .= $_POST ['mensaje'];

$para = 'mail@ejemplo.com'
$asunto = 'Posible clinte = ' . $nombre;

$headers = "Mime-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: " . $email . "\r\n";
$headers .= "To: " . $para . "\r\n";

mail( $para, $asunto, $mensaje, $headers);
header("Location: ../html/gracias.html")


?>