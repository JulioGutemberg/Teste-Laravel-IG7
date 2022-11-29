<?php

namespace App\Models;
use App\Models\Professor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = ['status','turno','nome','professor_id'];
    

    public function professor(){
        return $this->hasOne(Professor::class);
    }
}
