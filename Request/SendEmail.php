<?php


$para = "info@caribeanservice.com";
$titulo    = 'Contacto-Caribean';

$name = $_REQUEST["nombreU"];
$Correo = $_REQUEST["correoU"];


$mensaje   = $_REQUEST["mensaje"];

$body = "Usuario: ".$name."\r\nCorreo: ".$Correo."\r\nMensaje: ".$mensaje;

mail($para, $titulo, $body);

 echo json_encode("success");
