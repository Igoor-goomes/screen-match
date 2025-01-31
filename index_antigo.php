<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2025;
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento); 

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(
    nome:"Thor: Ragnarok", 
    anoLancamento: 2021,
    nota: 7.8,
    genero: "super-herói"
);

var_dump($notas);
sort($notas);
var_dump($notas);

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme->nomeFilme, ':'); 
var_dump($posicaoDoisPontos); // mostra a posição da minha busca

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));
echo "\n";
echo "Trabalhando com Json!\n";
// transformar um array em json
// var_dump (json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true)) . "\n";
$filmeComoStringJson = json_encode($filme);
// coloca um contéudo dentro de um arquivo
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);

// importando dados
$retornoFilmeArquivo = file_get_contents(__DIR__ . '/filme.json');
$retornoFilmeJson = json_decode($retornoFilmeArquivo, true);

var_dump($retornoFilmeJson);