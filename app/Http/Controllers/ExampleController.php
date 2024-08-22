<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ExampleController extends Controller
{
    public function index()
    {
        // a diferencia de los archivos blade que se retornan con view(), en intertia se retorna con Inertia::render()
        return Inertia::render('ExampleInertia');
    }
}
