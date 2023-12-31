<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = ['turno','curso','codigo'];
    protected $table = 'turmas';
    
    public function alunos(){
        return $this -> hasMany (Aluno::class);
    }
    use HasFactory;
}
