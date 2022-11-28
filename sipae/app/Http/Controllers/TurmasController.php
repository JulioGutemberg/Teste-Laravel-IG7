<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmasController extends Controller
{
    public function create(){
        return view('turmas.create');
    }
    public function store(Request $request){
        Turma::create([
            'status' =>   $request->status,
            'turno' =>    $request->turno,
            'nome' =>     $request->nome,
        ]);

        return redirect(to:'turmas/ver');
    }

    public function show(){
        $turma = Turma::all();
        return view('turmas.show',['turma'=>$turma]);
    }

    public function edit($id){
        $turmas = Turma::findOrFail($id);
        return view('turmas.edit',['turmas'=>$turmas]);
        
    }

    public function update(Request $request, $id){

        $turmas = Turma::findOrFail($id);

        $turmas->update([
            'status' =>   $request->status,
            'turno' =>    $request->turno,
            'nome' =>     $request->nome,

        ]);
    
        return redirect(to:'turmas/ver')->with('Sucesso','Escola Atualizada');
    }

    public function delete($id){
        $turma = Turma::findOrFail($id);
        return view('turmas.delete',['turmas' => $turma]);
    }

    
    public function destroy($id){
        $turma = Turma::findOrFail($id);
        $turma->delete();

        return redirect(to:'turmas/ver')->with('Sucesso','Escola Excluido');
    }
}
