@extends('turmas.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header" >Inserir</div>

            <form action="{{url('turmas')}}" method="post">   
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <label> codigo</label>
                <input type="text" name="codigo" id="codigo" class="form-control">
            
                <label> turno</label>
                <input type="text" name="turno" id="turno" class="form-control" >
        
                <label> curso</label>
                <input type="text" name="curso" id="curso" class="form-control">
        
                <input type="submit" value="Salvar" class="btn btn-success">
            </form>
        </div>
    </div>
@stop