<?php

use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;
use ScreenMatch\Servicos\ConversorNotaEstrela;

require 'autoload.php';

$serie = new Serie('Nome da serie', 2024, Genero::Acao, 7,20,30);
$episodio = new Episodio($serie, 1, 'Piloto');

try {
    $episodio->avalia(45);
    $episodio->avalia(-35);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio) . "\n";
} catch (Exception $e) {
    echo"Um problema aconteceu: ". $e->getMessage() . "\n";
}
