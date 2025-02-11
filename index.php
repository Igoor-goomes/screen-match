<?php
require 'autoload.php';

use ScreenMatch\Modelo\{
    Filme, Episodio, Serie, Genero, Titulo
};

use ScreenMatch\Servicos\{
    CalculadoraMaratona, ConversorNotaEstrela
};

echo "Seja bem vindo ao Screen Match";

$filme = new Filme('Thor Ragnarok', 2021, Genero::SuperHeroi, 180);
// passando notas
$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);


// echo "Média do filme é: " . $filme->media() . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 1, 'O piloto');
$serie->avalia(8);
echo "Média da serie é: " . $serie->media() . "\n";

$calculadora = new CalculadoraMaratona();
$calculadora->incluiCalculo($filme);
$calculadora->incluiCalculo($serie);
$duracao = $calculadora->duracao();
echo "Para essa maratona, você precisa de $duracao minutos \n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";
