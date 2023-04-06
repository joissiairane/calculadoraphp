<?php
namespace APP\model;

class Calculadora
{
    public static function Somar(int $a, int $b): int
    {
        return $a + $b;
    }
    public static function Multiplicar(int $a, int $b): int
    {
        return $a * $b;
    }
    public static function Subtrair(int $a, int $b): int
    {
        return $a - $b;
    }
    public static function Dividir(int $a, int $b): int
    {
        return $a / $b;
    }
}