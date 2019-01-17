<?php 
require "../vendor/autoload.php";


$dsn = 'mysql:host=mysql23.ezhostingserver.com;dbname=id6793594_wasidb;charset=utf8';
$usr = 'id6793594_root';
$pwd = 'Adm_1234';

$pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);




$stm = $pdo->insert(array('tipo_negocio', 'nombre_propietario', 'direccion_propietario','telefono_propietario','celular_propietario',
'correo_propietario','estado_del_inmueble','tipo_inmueble','destinacion_inmueble','direccion_inmueble',
'edificio_inmueble','punto_referencia_inmueble','area_inmueble','nombre_administrador','telefono_administrador',
'estrato_inmueble','alcobas','banos','sala','comedor',
'cocina','area_labores','habitacion_servicio','bano_servicio','balcon',
'patio','terraza','estudio','stars','mezanine',
'minisplit','citofono','garaje','otras_amenidades','ascensor',
'gimnasio','sauna','turco','zona_parques','zona_juegos',"porteria",
'salon_social','piscina','jacuzzi','tanque_reserva',
'parqueadero_visitas','planta_electrica','bbq','circuito_tv','otras_amenidades_2',
'precio_venta','precio_negocible_venta','nombre_contacto_venta','telefono_contacto_venta','precio_arriendo',
'precio_negociable_arriendo','nombre_contacto_arriendo','telefono_contacto_arriendo')) 
->into('publicacion')
->values(array( @$_REQUEST["tipo_negocio"],@$_REQUEST["nombre_propietario"],@$_REQUEST["direccion_propietario"],$_REQUEST["telefono_propietario"],$_REQUEST["celular_propietario"],
$_REQUEST["correo_propietario"],$_REQUEST["estado_del_inmueble"],$_REQUEST["tipo_inmueble"],$_REQUEST["destinacion_inmueble"],$_REQUEST["direccion_inmueble"],
$_REQUEST["edificio_inmueble"],$_REQUEST["punto_referencia_inmueble"],$_REQUEST["area_inmueble"],$_REQUEST["nombre_administrador"],$_REQUEST["telefono_administrador"],
$_REQUEST["estrato_inmueble"],$_REQUEST["alcobas"],$_REQUEST["banos"],@$_REQUEST["sala"],$_REQUEST["comedor"],
$_REQUEST["cocina"],$_REQUEST["area_labores"],$_REQUEST["habitacion_servicio"],$_REQUEST["bano_servicio"],
$_REQUEST["balcon"],$_REQUEST["patio"],$_REQUEST["terraza"],$_REQUEST["estudio"],$_REQUEST["stars"],
$_REQUEST["mezanine"],$_REQUEST["minisplit"],$_REQUEST["citofono"],$_REQUEST["garaje"],$_REQUEST["otras_amenidades"],
$_REQUEST["ascensor"],$_REQUEST["gimnasio"],$_REQUEST["sauna"],$_REQUEST["turco"],$_REQUEST["zona_parques"],
$_REQUEST["zona_juegos"],$_REQUEST["porteria"],$_REQUEST["salon_social"],$_REQUEST["piscina"],$_REQUEST["jacuzzi"],
$_REQUEST["tanque_reserva"],$_REQUEST["parqueadero_visitas"],$_REQUEST["planta_electrica"],$_REQUEST["bbq"],$_REQUEST["circuito_tv"],
$_REQUEST["otras_amenidades_2"],$_REQUEST["precio_venta"],$_REQUEST["precio_negocible_venta"],$_REQUEST["nombre_contacto_venta"],$_REQUEST["telefono_contacto_venta"],
$_REQUEST["precio_arriendo"],$_REQUEST["precio_negociable_arriendo"],$_REQUEST["nombre_contacto_arriendo"],$_REQUEST["telefono_contacto_arriendo"]
));

$insertId = $stm->execute(true);

$para = "info@caribeanservice.com";
$titulo    = 'Publicar Inmueble Caribean';



$body = "Un Usuario quiere publicar su  Inmueble en la pagina de caribean\r\nEncuentre mas Informacion en el siguiente enlace".$Correo."\r\nhttp://www.caribeanservice.com/vista.html?token=".$insertId;

mail($para, $titulo, $body);


echo json_encode("success");




