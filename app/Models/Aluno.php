<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = ['nome','ra','email','telefone','codigo','turmas_id'];
    protected $table = 'alunos';

    public function turmas(){
        return $this -> hasOne(Turma::class);
    }
    public function presenca(){
        return $this -> hasOne(Presenca::class);
    }

    use HasFactory;
}
