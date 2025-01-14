<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function calc($値1, $演算子, $値2)
    {
        if ($演算子 == 'addition') {
            $result = $値1 + $値2;
        } elseif ($演算子 == 'subtraction') {
            $result = $値1 - $値2;
        } elseif ($演算子 == 'multiplication') {
            $result = $値1 * $値2;
        } elseif ($演算子 == 'division') {
            $result = $値1 / $値2;
        }
        return view('calcs.calc', ['result' => $result]);
    }
}
