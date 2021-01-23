<?php

namespace PrimeirosPassos;

require_once './autoload.php';
use PrimeirosPassos\Model\Pessoa;

$eu = new Pessoa('pedro', 'leon');
$carlao = new Pessoa('carlão', 'do pé grande');
$vc = new Pessoa('alguem', 'da silva');
$eu->casar($vc);

?>