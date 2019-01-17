<?php
require '../vendor/autoload.php';
require_once './config.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropiedadesController
 *
 * @author Furiad
 */
class PropiedadesController {
 
    
 
    
 public function GetPorpertiesProjectSlider() {
     
    
    
    $client =  new GuzzleHttp\Client();
        $Acces = config::getAcces();
        $url = config::BaseUrl();
         $url = $url."property/search?".$Acces."&id_country=1&take=5" ;
        
       $response = $client->request('POST', $url,
                [
                    'headers' => [
                        'Content-Type' => 'application/json'
                    ]
                    ]
               
               );
 echo $response->getBody();
        
    }
    
    public function getProyectosArriendoSlider() {
     
    
    

        $client = new GuzzleHttp\Client();
        $Acces = config::getAcces();
        $url = config::BaseUrl();
         $url = $url."property/search?".$Acces."&id_country=1&take=5&for_rent=true" ;
        
       $response = $client->request('POST', $url,
                [
                    'headers' => [
                        'Content-Type' => 'application/json'
                    ]
                    ]
               
               );
 echo $response->getBody();
        
    } 

 public function DetallePropiedad($id){




       $client =  new GuzzleHttp\Client();
    $Acces = config::getAcces();
    $url = config::BaseUrl();
     $url = $url."property/get/".$id."?".$Acces."" ;
   
   $response = $client->request('POST', $url,
            [
                'headers' => [
                    'Content-Type' => 'application/json',

                ],
'verify' => false
                ]
           
           );
echo $response->getBody();

 }

    
        
    public function getProyectosVentaSlider() {
     
    
    

        $client = new GuzzleHttp\Client();
        $Acces = config::getAcces();
        $url = config::BaseUrl();
         $url = $url."property/search?".$Acces."&id_country=1&take=5&for_sale=true" ;
        
       $response = $client->request('POST', $url,
                [
                    'headers' => [
                        'Content-Type' => 'application/json'
                    ]
                    ]
               
               );
 echo $response->getBody();
        
    } 
    
    
    
    
    
}

//PropiedadesController::GetPorperties();
