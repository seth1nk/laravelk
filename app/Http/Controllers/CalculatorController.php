<?php
// app/Http/Controllers/CalculatorController.php

namespace App\Http\Controllers;

use App\Workers\Worker;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $worker;

    public function __construct(Worker $worker)
    {
        $this->worker = $worker;
    }

    public function calculate(Request $request)
    {
        $operation = $request->query('operation');
        $a = $request->query('a');
        $b = $request->query('b');

        try {
            $result = $this->worker->performCalculation($operation, $a, $b);
            return response()->json(['result' => $result]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}