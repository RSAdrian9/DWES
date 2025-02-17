<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //devuelve index hello world
    public function index()
    {
        //return 'Hello World';
        // ahora devolvemos todos los usuario en JSON
        $users = User::all();
        return response()->json($users);
    }

    public function detail($id)
    {
        $user = User::find($id);

        //devolvemos 404 si el usuario no existe
        if (!$user) {
            //abort(404);
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json($user);
    }
}
