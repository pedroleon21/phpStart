<?php

namespace PrimeirosPassos\Model\DataModel;

class CPF{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->$cpf;
    }

    public function getCPF(){
        return $this->cpf;
    }
}