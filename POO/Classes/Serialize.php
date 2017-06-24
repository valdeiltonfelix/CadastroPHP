<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

/**
 * Description of Serialize
 *
 * @author valdeilton
 */
class Serialize {
    private $oPessoa;
    private $arraypessoa= array();
    public function __construct(Pessoa $objt) {
     
        $this->oPessoa=$objt;
        $this->Salvar($this->oPessoa);
    }
    
    public function  Salvar(Pessoa $pessoa){
        $this->arraypessoa[""+$pessoa->getCpf()+""]=$pessoa->getCpf();
        $this->arraypessoa[0]=$pessoa->getNome();
        $this->arraypessoa[1]=$pessoa->getIdade();
        $this->arraypessoa[2]=$pessoa->getMae();
        $this->arraypessoa[3]=$pessoa->getPai();
        $pessoaserializada= serialize($this->arraypessoa);
        $this->gravabanco($pessoaserializada);
    }
    function gravabanco($serialize){
        
         $filename='BancoPessoa/pessoa.csv';
         if(!file_exists($filename)){
             fopen($filename,"w+");
             echo "Repita o processo ....";
             
         }  else {
             file_put_contents($filename,"\n".$serialize,FILE_APPEND);
             unset($this->arraypessoa);
             echo 'Dados gravados com sucesso';
         }
         
        
    }
}
