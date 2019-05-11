<?php
//llamdado a los campos
  $nombre =$_Post['nombre'];
  $correo= $_Post['correo'];
  $mensaje=$_Post['mensaje'];

  //datos para el correo
  $destino ="dcovarrubias_@hotmail.com";
  $asunto = "Contacto desde la web";

  $carta = "De: $nombre \n";
  $carta = "Correo: $correo \n";
  $carta = "Mensaje: $mensaje";

//enviando mensaje
  mail($destino,$asunto, $carta);
  header("Location:gracias.html");
 ?>
