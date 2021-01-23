<?php

namespace PrimeirosPassos\Model;

use Doctrine\Common\Collections\ArrayCollection;
use PrimeirosPassos\Model\DataModel\{Pessoa, CPF};

class Cliente extends Pessoa
{
    private float $orcamento;
    private float $saldo;
    private ArrayCollection $prodLista;
    public function __construct(float $orcamento, float $saldo, ArrayCollection $prodList)
    {
        $this->orcamento = $orcamento;
        $this->saldo = $saldo;
        $this->prodLista = $prodList;
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function incriseSaldo(float $saldo): self
    {
        if ($saldo > 0) {
            $this->saldo += $saldo;
        }
        return $this;
    }
    public function getOrcamento(): float
    {
        return $this->orcamento;
    }
    public function sumOrcamento(float $sum): self
    {
        if ($sum > 0) {
            $this->orcamento += $sum;
        }
        return $this;
    }
}
