<?php
include ('./Autoload/autoload2.php');
use Classes\Pessoa;
use Classes\Serialize;
use Classes\Deserializar;

if(isset($_POST["json"])){
   
    /* @var $Response type */
    $Response= json_decode($_POST["json"]);
   
}

if(isset($Response->salvar)){
    
$pessoa=new Pessoa();   
$pessoa->setNome($Response->nome);
$pessoa->setIdade($Response->idade);
$pessoa->setCpf($Response->cpf);
$pessoa->setMae($Response->mae);
$pessoa->setPai($Response->pai);
new Serialize($pessoa);

}

if(isset($Response->buscar)){
   $deserializando=new Deserializar();
   echo json_encode($deserializando->deserialinzando());
}


