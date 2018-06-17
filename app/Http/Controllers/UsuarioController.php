<?php

namespace App\Http\Controllers;

use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function findUserById($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

}