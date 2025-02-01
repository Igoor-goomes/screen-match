<?php

class Serie extends Titulo
{
    public function __construct(
        string $nomeFilme,
        int $anoLancamento,
        Genero $generoFilme,
        public readonly string $temporadas,
        public readonly string $episodioPorTemporada,
        public readonly int $duracaoEpisodio
    ) {
        parent::__construct($nomeFilme, $anoLancamento, $generoFilme);
    }

    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodioPorTemporada * $this->duracaoEpisodio;
    }
}
