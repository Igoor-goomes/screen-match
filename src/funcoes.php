<?php 

function exibeMensagemLancamento(int $ano): void 
{
    if ($ano > 2024) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2024 && $ano <= 2025) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool 
{
    return $planoPrime || $anoLancamento < 2024;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{
    $filme = new Filme();

    $filme->nomeFilme = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->generoFilme = $genero;
    $filme->notaFilme = $nota;
    return $filme;
    
}