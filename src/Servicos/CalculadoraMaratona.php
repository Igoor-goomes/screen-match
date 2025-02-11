<?php
namespace ScreenMatch\Servicos;

use ScreenMatch\Modelo\Titulo;

class CalculadoraMaratona
{

    private int $duracaoMaratona = 0;

    public function incluiCalculo(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoMaratona;
    }
}
