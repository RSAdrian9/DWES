<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //

    //Añadimos función de ejemplo:
    public function index()
    {
        return response()->json("Hello World", 200);
    }

    //Añadimos una segunda función de ejemplo para observar la diferencia:
    public function noAccess()
    {
        return response()->json("No access", 404);
    }
}
