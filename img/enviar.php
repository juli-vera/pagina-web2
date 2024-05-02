<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];
    $instrumento = $_POST["instrumento"];
    
    $destinatario = "mailto:julietavera287@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $mensaje = "Nombre: $nombre\n";
    $asunto = "Consulta de $nombre";
    $mensaje .= "Correo Electrónico: $correo\n\n";
    $mensaje .= "Consulta:\n$comentario";
    $mensaje .= "Consulta:\n$instrumento";

    mail($destinatario, $asunto, $mensaje);
 
    header("Location: confirmacion.html");   
   
}
?>
