@extends('alunos.layout');
@section('content');

    <div class="card" style="margin:20px;">
        <div class="card-header">Editar Aluno</div>
        <div class="card-body">

        <form action="{{url('/alunos'. '/update/' .$alunos->id)}}" method="POST">
            @csrf
            @method('POST')

            <label for="id">id:</label>
            <input type="text" id="id" name="id" class="form-control" value="{{ $alunos->id }}" required>

            <label> Codigo</label>
            <input type="text" name="codigo" class="form-control" value="{{$alunos->codigo}}">

            <label> nome</label>
            <input type="text" name="nome" class="form-control"  value="{{$alunos->nome}}">
    
            <label> ra</label>
            <input type="text" name="ra" class="form-control" value="{{$alunos->ra}}">

            <label> email</label>
            <input type="text" name="email" class="form-control" value="{{$alunos->email}}">

            <label> telefone</label>
            <input type="text" name="telefone" class="form-control" value="{{$alunos->telefone}}">

            <select name="turmas_id">
            @foreach($turmas as $turma)
            <option value="{{$turma->codigo}}">{{$turma->codigo}}</option>
             @endforeach
            </select>

            <input type="submit" value="Atualizar" class="btn btn-success">
        </form>
        </div>
    </div>
