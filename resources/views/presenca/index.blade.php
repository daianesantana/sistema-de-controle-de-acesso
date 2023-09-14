@extends('presenca.layout');
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Presença</h2>
            </div>
                <div class="card-body">
                    <a href="{{url('/presenca/create')}}" class="btn btn-success btn-sm" title="Criar turma">Pesquisar aluno</a>
            

                    <div class="table-responsive">
                        <table class="table">
                            
                            <thead>
                                <tr>
                                <th>id</th>
                                <th>alunos_id</th> 
                                <th>data_presenca</th> 
                                <tr>       
                            </thead>

                             <tbody>
                                @foreach($presenca as $presenca)
                                <tr>
                                <td>{{$presenca->id}}</td>
                                <td>{{$presenca->aluno_id}}</td>
                                <td>{{$presenca->data_presenca}}</td>                        
                                </tr>
                                @endforeach                       
                            </tbody>
                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
