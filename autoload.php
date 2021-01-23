<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $filePath = str_replace('humanos', '', $nomeCompletoDaClasse);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= 'php';
    if (file_exists($filePath)) {
        echo $filePath;
        require_once $filePath;
    }
});
