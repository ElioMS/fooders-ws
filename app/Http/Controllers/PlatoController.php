<?php

namespace App\Http\Controllers;

use App\Plato;

class PlatoController extends Controller
{
    public function index()
    {
        $platos = Plato::all();
        return response()->json($platos);
    }

    public function findPlatosByCategoria($id)
    {
        $platos = Plato::whereHas('categoria', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        return response()->json($platos);
    }

    public function findPlatoById($id)
    {
        $plato = Plato::with('categoria')->find($id);
        return response()->json($plato);
    }

}