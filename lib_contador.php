<?php
date_default_timezone_set('America/Sao_Paulo');
function registrarAcesso($nomePagina) {
    $arquivoIndividual = "contagem_" . str_replace('.php', '', $nomePagina) . ".txt";
    $arquivoLogGeral = "registro_acessos.txt";

    $acessos = file_exists($arquivoIndividual) ? (int)file_get_contents($arquivoIndividual) : 0;
    file_put_contents($arquivoIndividual, ++$acessos);

    $dataHora = date('d/m/Y H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    
    $linhaLog = "$nomePagina | $dataHora | $ip | $navegador" . PHP_EOL;
    file_put_contents($arquivoLogGeral, $linhaLog, FILE_APPEND);
}
?>