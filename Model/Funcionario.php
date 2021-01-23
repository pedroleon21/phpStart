<?php

namespace PrimeirosPassos\Model;
use PrimeirosPassos\Model\DataModel\{Pessoa,CPF};

class Funcionario extends Pessoa
{

    private string $matricula;

    public function __construct(string $matricula,string $nome,string $sobrenome,string $cpf)
    {
        parent::__construct($nome,$sobrenome,$cpf);
        $this->matricula=$matricula;
    }

    private function getMatricula():string
    {
        return $this->matricula;
    }
    
}