<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function sumar($num1, $num2)
    {
        $suma = $num1 + $num2;
        return response()->json(['suma' => $suma]);
    }

    public function multiplicar($num1, $num2)
    {
        $multiplicar = $num1 * $num2;
        return response()->json(['multiplicar' => $multiplicar]);
    }
}
