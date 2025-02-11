<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel
{
    use ComAvaliacao;

    // método construdor -> chamado automaticamente sempre que estacia um objeto
    public function __construct(
        public readonly string $nomeFilme,
        public readonly int $anoLancamento,
        public readonly Genero $generoFilme,
    ) {
        $this->notas = []; // por padrão qualquer inicialização de propriedades deixamos dentro do método construtor
    }

    abstract public function duracaoEmMinutos(): int;

    public function __toString(): string
    {
        return $this->nomeFilme;
    }
}
