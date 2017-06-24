<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author valdeilton
 */

namespace Classes;

class Pessoa {
    
      private $nome;
      private $idade; 
      private $mae;
      private $pai;
      private $cpf;
      
      function setNome($nome){
          $this->nome=$nome;
      }
      
      function getNome(){     
                 return $this->nome;
           }
      
      function setMae($nome){      
               $this->mae=$nome;
           }
      
      function getMae(){                   
                return $this->mae;
          }
          
      function setPai($pai){     
               $this->pai=$pai;
       }
      
       function getPai(){
                return $this->pai;
       }
       
       function setCpf($cpf){        
                $this->cpf=$cpf;
       }
       
       
       function getCpf(){        
                 return $this->cpf;
       
       }
       
       function setIdade($idade){        
                 $this->idade=$idade;
       }
      function getIdade(){        
                 return $this->idade;
       }       
}

