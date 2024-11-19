<?php
namespace App\Calculators;

class Del
{
    public function delenie($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Деление на ноль невозможно");
        }
        return $a / $b;
    }
}