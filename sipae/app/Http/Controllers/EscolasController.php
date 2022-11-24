<?php

namespace App\Http\Controllers;

class EscolasController extends Controller
{
    public function create(){
        return view("escolas.create");
    }
}
