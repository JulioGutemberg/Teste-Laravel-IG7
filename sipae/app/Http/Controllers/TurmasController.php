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

        return "Turma criada com Sucesso!";
    }
}
