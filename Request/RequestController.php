<?php
require'../vendor/autoload.php';
require_once './PropiedadesController.php';
require_once "./FiltroVentas.php";





$accion  = $_REQUEST["Accion"];


switch ($accion) {
    case "SliderPropiedades":
        
        PropiedadesController::GetPorpertiesProjectSlider();
        
        break;
      case "SliderArriendos":
      PropiedadesController::getProyectosArriendoSlider();

        break;
      case "SliderVentas":
      PropiedadesController::getProyectosVentaSlider();

        break;
      case "filtroVentas":
     

      FiltroController::VentasAll();


        break;
      case "filtroArriendos":
    
      FiltroController::ArriendosAll();
      break;

      case "filtroArriendosVentas":
     
      FiltroController::VentasArriendo();


        break;
      case "FiltroAll":

      FiltroController::AllData();


        break;

        case "DetalleProp":
        PropiedadesController::DetallePropiedad( $_REQUEST["idP"] );

        break;
    
    

    default:
        break;
}



