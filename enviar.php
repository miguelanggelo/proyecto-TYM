<?php 
// LLAMANDO A LOS CAMPOS
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// DATOS PARA EL CORREO
$destinatario = "transporteymudanzalc@gmail.com";
$asunto = "Mensaje de cliente";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// ENVIANDO MENSAJE
mail($destinatario, $asunto, $carta);
header('Location:mensaje-envio.html')
// min 20


?>