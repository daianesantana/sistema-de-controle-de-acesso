@extends('alunos.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Detalhes do aluno</div>
        <div class="card-body">
            <div class="card-body">
        
                <p><strong>id:</strong> {{ $alunos->id }}</p>
                <p><strong>codigo:</strong> {{ $alunos->turmas_id }}</p>
                <p><strong>nome:</strong> {{ $alunos->nome }}</p>
                <p><strong>ra:</strong> {{ $alunos->ra }}</p>
                <p><strong>codigo aluno:</strong> {{ $alunos->codigo }}</p>
                <p><strong>email:</strong> {{ $alunos->email }}</p>
                <p><strong>telefone:</strong> {{ $alunos->telefone }}</p>

            </div>
        </div>  
    </div>
