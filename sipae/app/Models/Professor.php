<?php

namespace App\Models;
use App\Models\Turma;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable = ['status','nome'];

    public function turma(){
        return $this->belongsTo(Turma::class);
    }
}
