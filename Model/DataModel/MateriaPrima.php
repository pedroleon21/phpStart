<?php

namespace PrimeirosPassos\Model\DataModel;

interface MateriaPrima{

    public function setNomeMateria(string $materiaPrima):self;
    
    public function getNomeMateria():string;
    
    public function rendimento():float;
}