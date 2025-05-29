<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infraestrutura;
use Illuminate\Support\Facades\Auth;

class InfraestruturaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'descricao' => 'nullable|string|max:255',
        ]);

        $data['user_id'] = Auth::id();

        Infraestrutura::create($data);

        return response()->json(['message' => 'Local salvo com sucesso!']);
    }
}
