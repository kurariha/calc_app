<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function calc($number1, $operator, $number2)
    {
        if ($operator == 'addition') {
            $result = $number1 + $number2;
        } elseif ($operator == 'subtraction') {
            $result = $number1 - $number2;
        } elseif ($operator == 'multiplication') {
            $result = $number1 * $number2;
        } elseif ($operator == 'division') {
            $result = $number1 / $number2;
        }
        return view('calcs.calc', ['result' => $result]);
    }
}
