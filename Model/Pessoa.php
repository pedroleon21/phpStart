<?php

namespace PrimeirosPassos\Model;

use PrimeirosPassos\Model\DataModel\CPF;

class Pessoa
{
    private string $nome;
    private string$sobrenome;
    private $conjuge;
    private CPF $cpf;
    
    public function __construct($nome, $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->conjuge=NULL;
        $this->conjuge = NULL;
    }
    
    public function casar(Pessoa $conjuge): self
    {
        if (!$this->casado() && !$conjuge->casado()) {
            $this->conjuge = $conjuge;
            $conjuge->conjuge = $this;
            return $this;
        }
        return $this;
    }

    public function casado()
    {
        if ($this->conjuge) {
            return true;
        }
        return false;
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
    public function getCPF():string
    {
        return $this->cpf->getCPF();
    }
}
