<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    use HasFactory;
    protected $fillable = ['alunos_id','data_presenca'];
    protected $table = 'presenca';

    public function alunos(){
        return $this -> hasOne(Presenca::class);
    }
    use HasFactory;
}
