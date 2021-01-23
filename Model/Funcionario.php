<?php
namespace PrimeirosPassos\Model;
class Funcionario extends Pessoa
{

    private string $matricula;

    public function __construct($matricula,$nome,$sobrenome,$dataNacimento)
    {
        parent::__construct($nome,$sobrenome,$dataNacimento);
        $this->matricula=$matricula;
    }

    private function getMatricula():string
    {
        return $this->matricula;
    }
    
}