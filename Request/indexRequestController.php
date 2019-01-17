<?php
require_once './indexController.php';






$accion = $_REQUEST['accion'];
$controller = new indexController();



switch ($accion) {
    case 'tiposInmueble':

   $controller->getAllTypesPropertiess();
    
break;
    
case 'getPropiedades':

$controller->getAllProyectos();
 
break;

case "GetArriendo":

$controller->ArriendosAll();

break;

case "GetVentas":

$controller->VentasAll();

break;





    default:
     
        break;
}

