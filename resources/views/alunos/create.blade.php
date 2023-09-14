@extends('alunos.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Adicionar novo aluno</div>

        <form action="{{url('alunos')}}" method="post">
            {!!csrf_field()!!}

            <label> Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">

            <label> RA:</label>
            <input type="text" name="ra" class="form-control" >
        
            <label> Codigo aluno:</label>
            <input type="text" name="codigo" class="form-control">
        
            <label> Email:</label>
            <input type="text" name="email" class="form-control" >

            <label> Telefone:</label>
            <input type="text" name="telefone" class="form-control" >
            
            <select name="turmas_id">
            @foreach($turmas as $turma)
                <option value="{{$turma->codigo}}">{{$turma->codigo}}</option>
            @endforeach
            </select>

            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </div>
@stop