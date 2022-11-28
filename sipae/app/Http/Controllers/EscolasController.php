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
            'status'   => $request->status,
            'inep'     => $request->inep,
            'endereço' => $request->endereço,
            'nome'     => $request->nome, 

        ]);

        return redirect(to:'escola/ver');
    }

    public function show(){
        
        $escola= Escola::all();
        return view('escolas.show', ['escola'=> $escola]);
    }

    public function edit($id){
        $escolas = Escola::findOrFail($id);
        return view('escolas.edit', ['escolas'=> $escolas]);
    }

    public function update(Request $request,$id){
        
        $escolas = Escola::findOrFail($id);

        $escolas->update([
            'status'  => $request->status,
            'inep'    => $request->inep, 
            'endereço'=> $request->endereço,
            'nome'    => $request->nome
        ]);
    
        return redirect(to:'escola/ver')->with('Sucesso','Escola Atualizada');
    }

    public function delete($id){
        $escola = Escola::findOrFail($id);
        return view('escolas.delete', ['escolas' => $escola]);
    }

    
    public function destroy($id){
        $escola = Escola::findOrFail($id);
        $escola->delete();

        return redirect(to:'escola/ver')->with('Sucesso','Escola Deletada');
    }
}
