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

        return redirect(to:'professores/ver');
    }

    public function show(){
        $professor = Professor::all();
        return view('professores.show',['professor'=>$professor]);
    }

    public function edit($id){
        $professores = Professor::findOrFail($id);
        return view('professores.edit',['professores'=>$professores]);
        
    }

    public function update(Request $request, $id){

        $professores = Professor::findOrFail($id);

        $professores->update([
            'status' =>   $request->status,
            'nome' =>     $request->nome,

        ]);
    
        return redirect(to:'professores/ver')->with('Sucesso','Professor(a) Atualizado(a)');
    }

    public function delete($id){
        $professor = Professor::findOrFail($id);
        return view('professores.delete',['professores'=>$professor]);
    }

    
    public function destroy($id){
        $professor = Professor::findOrFail($id);
        $professor->delete();

        return redirect(to:'professores/ver')->with('Sucesso','Professor(a) Atualizado(a)');
    }
}
