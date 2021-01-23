<?php

namespace PrimeirosPassos\Model;

use PrimeirosPassos\Model\DataModel\MateriaPrima;

class Compra implements MateriaPrima{
    
    private float $preco;
    private int $medida;
    private string $materiaPrima;
    private float $porcaoTamanho;

    public function __construct(float $preco,int $medida)
    {
        $this->medida = $medida;
        $this->preco = $preco;
    }
    
    public function calcPreco(float $qtd):float
    {
        return $qtd * $this->getValor()* $this->medida;
    }
    
    public function getValor():float
    {
        return $this->preco * $this->medida;
    }

    public function setMedida(int $medida):Compra
    {
        $this->medida = $medida;
        return $this;
    }

    public function setNomeMateria(string $materiaPrima): self
    {
        $this->materiaPrima = $materiaPrima;
        return $this;
    }
    
    public function getNomeMateria(): string
    {
        return $this->materiaPrima;
    }

    public function rendimento():float
    {
        return $this->medida * $this->preco;
    }

    public function __set($name, $value):self
    {
        $metodo =  'set' . ucfirst($name);
        $this->$metodo = $value;
        return $this;
    }
}