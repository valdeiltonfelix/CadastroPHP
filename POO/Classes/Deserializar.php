<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

/**
 * Description of Deserializar
 *
 * @author valdeilton
 */
class Deserializar {
    private $arquivo="";
     private $arrayseriazido=array();
            function deserialinzando(){
          $filename='BancoPessoa/pessoa.csv';
        if (file_exists($filename)){        
            $this->arquivo=  file_get_contents($filename);
            $this->arquivo=  explode("\n", $this->arquivo);
            foreach ($this->arquivo as $values){
            
             $this->arrayseriazido[]=unserialize($values);
            }
         }
         //var_dump($this->arrayseriazido);
         return $this->arrayseriazido; 
    }
    
}
