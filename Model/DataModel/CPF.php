<?php

namespace PrimeirosPassos\Model\DataModel;

class CPF{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf=$cpf;
    }
    public function setCpf(string $cpf):self
    {
        $this->cpf = $cpf;
        return $this;
    }
    public function getCPF(){
        return $this->cpf;
    }
}
