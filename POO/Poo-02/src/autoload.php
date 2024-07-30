<?php

spl_autoload_register(
    function (string $nomeCompletoDaClasse) {
        $caminhoArquivo = str_replace('rp_cod_poo_02', 'src', $nomeCompletoDaClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
        $caminhoArquivo .= ".php";

        if (file_exists($caminhoArquivo)) {
            require_once $caminhoArquivo;
        }
    }
);
