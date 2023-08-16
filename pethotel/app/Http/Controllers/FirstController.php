<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    function demo(string $name)
    {
        return "Demo method at First Controller WORKS <h1>Hello $name</h1>";
    }
}
