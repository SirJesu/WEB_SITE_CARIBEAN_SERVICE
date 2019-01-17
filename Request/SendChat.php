<?php






$para = "info@caribeanservice.com";
$titulo    = 'Chat-Caribean';

$name = $_REQUEST["nombreU"];
$Correo = $_REQUEST["correoU"];
$token = $_REQUEST["tokenChat"];




$body = "El siguiente cliente solicita asistencia en linea \r\n Usuario: ".$name."\r\nCorreo: ".$Correo."\r\n  
Para Asesorarlo Ingresa al siguiente enlace\r\n 

http://www.caribeanservice.com/respuesta.html?token=".$token;

mail($para, $titulo, $body);

echo json_encode("Success");