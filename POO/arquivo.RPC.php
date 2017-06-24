<?php
include ('./Autoload/autoload2.php');
if(isset($_POST["json"])){
    /* @var $Response type */
    $Response= json_decode($_POST["json"]);
}

use Classes\Pessoa;
use Classes\Serialize;
$pessoa=new Pessoa();

$pessoa->setNome($Response->nome);
$pessoa->setIdade($Response->idade);
$pessoa->setCpf($Response->cpf);
$pessoa->setMae($Response->mae);
$pessoa->setPai($Response->pai);
new Serialize($pessoa);


