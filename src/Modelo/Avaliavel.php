<?php
namespace ScreenMatch\Modelo;

interface Avaliavel {
    // marcação de método abstrato
    public function avalia(float $nota): void;
    public function media(): float;
}