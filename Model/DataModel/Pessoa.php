<?php

namespace PrimeirosPassos\Model\DataModel;

use PrimeirosPassos\Model\DataModel\CPF;

abstract class Pessoa
{
    private string $nome;
    private string $sobrenome;
    private CPF $cpf;
    
    public function __construct(string $nome, string $sobrenome,string $cpf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = new CPF($cpf);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }
    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
    public function getCpf(){
        return $this->cpf->getCPF();
    }
}
