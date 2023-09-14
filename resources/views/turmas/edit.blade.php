@extends('turmas.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Editar turma</div>
            <div class="card-body">

                <form action="{{url('/turmas' .'/update/' .$turmas->id )}}" method="POST">
                    @csrf
                    @method('POST')

                        <label for="id">id:</label>
                        <input type="hidden" id="id" name="id" class="form-control" value="{{ $turmas->id }}" required>

                        <label for="id">Codigo:</label>
                        <input type="text" id="codigo" name="codigo" class="form-control" value="{{ $turmas->codigo }}" required>

                        <label for="id">Turno:</label>
                        <input type="text" id="turno" name="turno" class="form-control" value="{{ $turmas->turno }}" required>

                    <input type="submit" value="Atualizar" class="btn btn-success">
                </form>
            </div>
    </div>
