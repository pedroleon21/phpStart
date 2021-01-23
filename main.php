<?php

namespace PrimeirosPassos;
require_once 'autoload.php';

use PrimeirosPassos\Model\{Pessoa,Funcionario};
use PrimeirosPassos\Model\DataModel\CPF;

$eu = new Pessoa('pedro','leon', new DateTime());
$carlao = new Pessoa('carlão','do pé grande',new DateTime());
$vc = new Pessoa('alguem','da silva',new DateTime());
try{
    $eu->casar($vc);
}catch(Exception $ex){
    echo $ex->getMessage(). PHP_EOL;
}