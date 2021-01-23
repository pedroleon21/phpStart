<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $filePath = str_replace('PrimeirosPassos\\', '.' . DIRECTORY_SEPARATOR , $nomeCompletoDaClasse);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
