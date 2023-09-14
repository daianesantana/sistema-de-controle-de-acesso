@extends('turmas.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Detalhes da turma</div>
            <div class="card-body">
                <div class="card-body">
        
                    <p><strong>id:</strong> {{ $turmas->id }}</p>
                    <p><strong>curso:</strong> {{ $turmas->curso }}</p>
                    <p><strong>turno:</strong> {{ $turmas->turno }}</p>
                    <p><strong>codigo:</strong> {{ $turmas->codigo }}</p>

                </div>
            </div>      
    </div>
