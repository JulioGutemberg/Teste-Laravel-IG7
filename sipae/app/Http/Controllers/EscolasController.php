<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Escola;

class EscolasController extends Controller
{
    public function create(){
        return view("escolas.create");
    }

    public function store(Request $request){
        Escola::create([
            'status' =>   $request->status,
            'inep' =>     $request->inep,
            'endereço' => $request->endereço,
            'nome' =>     $request->nome,
        ]);

        return "Escola criada com Sucesso!";
    }

    public function show($id){
        $escola = Escola::findOrFail($id);
        return view('escolas.show', ['escola'=> $escola]);
    }

    public function edit($id){
        $escola = Escola::findOrFail($id);
        return view('escolas.edit', ['escola'=> $escola]);
    }

    public function update(Request $request, $id){
        $escola = Escola::findOrFail($id);

        $escola->update([
            'status' =>   $request->status,
            'inep' =>     $request->inep,
            'endereço' => $request->endereço,
            'nome' =>     $request->nome,

        ]);
    
        return "Escola atualizada com Sucesso!";
    }
}
