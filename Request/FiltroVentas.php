<?php

require '../vendor/autoload.php';
require_once './config.php';





class FiltroController {

    function MakeRequest($url){
        $client =  new GuzzleHttp\Client();
       
            
        $response = $client->request('POST', $url,
                 [
                     'headers' => [
                         'Content-Type' => 'application/json'
                     ]
                     ]
                
                );
    echo $response->getBody();
    
    
    
    
    }

    function ArriendosAll(){
  
        $acceso = config::getAcces();    
   
    $url = "api.wasi.co/v1/property/search?".$acceso."&for_rent=true&take=100&order_by=created_at&id_city=155";
    //echo $url;
    FiltroController::MakeRequest($url);
    }
    
    
    function VentasAll(){
      
        $acceso = config::getAcces();    
      
    
    $url = "api.wasi.co/v1/property/search?".$acceso."&for_sale=true&take=100&order_by=created_at&id_city=155";
  
    FiltroController::MakeRequest($url);
    }
    function VentasArriendo(){
      
        $acceso = config::getAcces();    
   
    
    $url = "api.wasi.co/v1/property/search?".$acceso."&for_sale=true&for_rent=true&take=100&order_by=created_at&id_city=155";
    //echo $url;
    FiltroController::MakeRequest($url);
    }

    function  AllData(){
     
        $acceso = config::getAcces();    
      
    
        $url = "api.wasi.co/v1/property/search?".$acceso."&take=100&order_by=created_at&id_city=155";
      
        FiltroController::MakeRequest($url);


    }






}