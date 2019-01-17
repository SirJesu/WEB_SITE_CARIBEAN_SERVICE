<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of config
 *
 * @author Furiad
 */
class config {


  
  
 public function getAcces() {
    $token = "tZNi_aPxj_mi1Y_qYMX"; 
    $WasiId = "1933735";
     
    return "id_company=".$WasiId."&wasi_token=".$token;
  }
  function BaseUrl() {
      
      return "https://api.wasi.co/v1/";
      
  }
  

  
  
  
}
