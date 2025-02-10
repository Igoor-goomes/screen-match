<?php

class Episodio implements Avaliavel
{
    use ComAvaliacao;

    public function __construct(
        private readonly Serie $serie,
        private readonly int $numeroEpisodio,
        private readonly string $nomeEpisodio
    ) {}
}
