<?php
namespace ScreenMatch\Servicos;

use ScreenMatch\Modelo\Avaliavel;


class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        // tratando erros PHP
        try {
            $nota = $avaliavel->media();
            
            return round($nota) / 2;
        } catch(\Throwable $erro) {
            echo $erro->getMessage();
            return 0;
        }
    }
}
