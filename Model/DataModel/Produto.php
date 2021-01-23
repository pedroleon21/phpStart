<?php

namespace PrimeirosPassos\Model\DataModel;

use PrimeirosPassos\Model\Compra;

interface Produto
{
    public function getValor():float;

    public function getMedida():int;

    public function setMedida(int $medida):Compra;
}