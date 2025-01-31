<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";

echo "Seja bem vindo ao Screen Match";

$filme = new Filme('Thor Ragnarok', 2021, Genero::SuperHeroi,180);
// passando notas
$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);


echo "Média do filme é: " . $filme->media() . "\n";
echo "Ano do Lancamento: " . $filme->anoLancamento . "\n";
