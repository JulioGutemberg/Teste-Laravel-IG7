<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    public function create(){
        return view('professores.create');
    }

    public function store(Request $request){
        Professor::create([
            'status' =>   $request->status,
            'nome' =>     $request->nome,
        ]);

        return "Professor(a) criado(a) com Sucesso!";
    }

    public function show($id){
        $professor = Professor::findOrFail($id);
        return view('professores.show',['professor'=>$professor]);
    }

    public function edit($id){
        $professor = Professor::findOrFail($id);
        return view('professores.edit',['professor'=>$professor]);
        
    }

    public function update(Request $request, $id){
        $professor = Professor::findOrFail($id);

        $professor->update([
            'status' =>   $request->status,
            'nome' =>     $request->nome,

        ]);
    
        return "Professor(a) atualizado(a) com Sucesso!";
    }

    public function delete($id){
        $professor = Professor::findOrFail($id);
        return view('professores.delete',['professor'=>$professor]);
    }

    
    public function destroy($id){
        $professor = Professor::findOrFail($id);
        $professor->delete();

        return "Professor(a) excluido(a) com Sucesso!";
    }
}
