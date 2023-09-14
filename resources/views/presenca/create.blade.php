@extends('presenca.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header" >Inserir</div>

        <form action="{{url('presenca/create')}}" method="get">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <br>
            <select name="alunos_id">
            @foreach($alunos as $aluno)
                <option value="{{$aluno->id}}">{{$aluno->id}}</option>
            @endforeach
            </select>
            <br>
            <label for="date">Data da presença</label>
            <input type="date" name="date" id="date" class="form-control">
            <br>
            <div>
                <input type="checkbox" id="presente" name="presente" checked>
                <label for="presente">Presente</label>
            </div>
            <br>
            <input type="submit" value="Registrar presença" class="btn btn-success">
        </form>
        
    </div>
</div>
@stop
