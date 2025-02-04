<?php

abstract class Titulo
{
    // atributos
    private array $notas;

    // método construdor -> chamado automaticamente sempre que estacia um objeto
    public function __construct(
        public readonly string $nomeFilme,
        public readonly int $anoLancamento,
        public readonly Genero $generoFilme,
    ) {
        $this->notas = []; // por padrão qualquer inicialização de propriedades deixamos dentro do método construtor
    }
    // métodos
    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    abstract public function duracaoEmMinutos(): int;
}
