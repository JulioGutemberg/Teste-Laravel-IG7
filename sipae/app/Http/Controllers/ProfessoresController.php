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

        return "Professor criado com Sucesso!";
    }
}
