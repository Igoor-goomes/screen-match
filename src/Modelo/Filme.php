<?php

namespace ScreenMatch\Modelo;

use Override;

class Filme extends Titulo
{
    public function __construct(
        string $nomeFilme,
        int $anoLancamento,
        Genero $generoFilme,
        public readonly int $duracaoEmMinutos
    ) {
        parent::__construct($nomeFilme, $anoLancamento, $generoFilme);
    }
    #[Override]
    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }
}
