<?php

namespace PrimeirosPassos;

require_once './autoload.php';

use PrimeirosPassos\Model\{Compra, Funcionario};

$eu = new Funcionario('123','pedro', 'leon', '000.111.222-33');
$carlao = new Funcionario('456','carlão', 'do pé grande','111-222-333-44');
$vc = new Funcionario('789','alguem', 'da silva', '222-333-444-55');

$arroz = new Compra(4.99,1);

var_dump($arroz);