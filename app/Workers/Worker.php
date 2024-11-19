<?php
// app/Workers/Worker.php
namespace App\Workers;

use App\Calculators\Calcul;

class Worker
{
    protected $calcul;

    public function __construct(Calcul $calcul)
    {
        $this->calcul = $calcul;
    }

    public function performCalculation($operation, $a, $b)
    {
        return $this->calcul->calculate($operation, $a, $b);
    }
}