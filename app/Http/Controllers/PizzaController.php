<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //

    public function index()
    {
        $pizzas = Pizza::get();
        return $pizzas;
    }
}
