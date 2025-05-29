<?php

namespace App\Http\Controllers;

use App\Models\Reclamacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReclamacaoController extends Controller
{
    public function create()
    {
        return view('reclamacoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $reclamacao = new Reclamacao();
        $reclamacao->tipo = $request->tipo;
        $reclamacao->descricao = $request->descricao;
        $reclamacao->latitude = $request->latitude;
        $reclamacao->longitude = $request->longitude;

        // Armazena a imagem se enviada
        if ($request->hasFile('imagem')) {
            $caminhoImagem = $request->file('imagem')->store('reclamacoes', 'public');
            $reclamacao->imagem = $caminhoImagem;
        }

        $reclamacao->save();

        return redirect()->back()->with('success', '✅ Reclamação enviada com sucesso!');
    }
}
