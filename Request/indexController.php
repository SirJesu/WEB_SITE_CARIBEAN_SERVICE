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


//echo "IndecController";
 class indexController {


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





function getAllTypesPropertiess(){
  
    $acceso = config::getAcces();    
   

$url = "api.wasi.co/v1/property-type/all?".$acceso;

$this->MakeRequest($url);
}

function getAllProyectos(){
  
    $acceso = config::getAcces();    
   

$url = "api.wasi.co/v1/property/hightlighted?".$acceso;
echo $url;
$this->MakeRequest($url);
}

//api.wasi.co/v1/property/search

function ArriendosAll(){
  
    $acceso = config::getAcces();    
   

$url = "api.wasi.co/v1/property/search?".$acceso."&for_rent=true&take=100";
//echo $url;
$this->MakeRequest($url);
}


function VentasAll(){
  
    $acceso = config::getAcces();    
   

$url = "api.wasi.co/v1/property/search?".$acceso."&for_sale=true&take=100";
//echo $url;
$this->MakeRequest($url);
}






 }