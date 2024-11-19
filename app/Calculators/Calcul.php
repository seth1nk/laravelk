<?php
// app/Calculators/Calcul.php
namespace App\Calculators;

class Calcul
{
    protected $slo;
    protected $vich;
    protected $umn;
    protected $del;

    public function __construct(Slo $slo, Vich $vich, Umn $umn, Del $del)
    {
        $this->slo = $slo;
        $this->vich = $vich;
        $this->umn = $umn;
        $this->del = $del;
    }

    public function calculate($operation, $a, $b)
    {
        switch ($operation) {
            case 'slozhenie':
                return $this->slo->slozhenie($a, $b);
            case 'vichitanie':
                return $this->vich->vichitanie($a, $b);
            case 'umnozhenie':
                return $this->umn->umnozhenie($a, $b);
            case 'delenie':
                return $this->del->delenie($a, $b);
            default:
                throw new \InvalidArgumentException("Неизвестная операция");
        }
    }
}