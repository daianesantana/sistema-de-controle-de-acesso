@extends('turmas.layout');
@section('content')

    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Alunos</h2>
                    </div>
                        <div class="card-body">
                            <a href="{{url('/alunos/create') }}" class="btn btn-success btn-sm" title="Adicionar novo aluno">Adicionar Aluno</a>
           
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>id</th>
                                        <th>nome</th>
                                        <th>ra</th>
                                        <th>codigo</th> 
                                        <th>email</th> 
                                        <th>telefone</th> 
                                        <th>turmas_id</th> 
                                        
                                        <tr>       
                                    </thead>
                                    <tbody>

                                        @foreach($alunos as $aluno)
                                        <tr>
                                            <td>{{$aluno->id}}</td>
                                            <td>{{$aluno->nome}}</td>
                                            <td>{{$aluno->ra}}</td>
                                            <td>{{$aluno->codigo}}</td>
                                            <td>{{$aluno->email}}</td>
                                            <td>{{$aluno->telefone}}</td>
                                            <td>{{$aluno->turmas_id}}</td>
            
                                        <td>
                                            <a href="{{url('/alunos/' . $aluno->id)}}" title="Detalhes"><button class="btn btn-info btn-sm"><i class="fa fa-eye" arial-hidden="true"></i>Detalhes</button></a>

                                            <a href="{{url('/alunos/' . $aluno->id . '/edit')}}" title="Editar aluno"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" arial-hidden="true"></i>Editar</button></a>

                                        <form action="/alunos/destroy/{{$aluno->id}}" method="GET" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Deletar turma" onclick="return confirm('Tem certeza que deseja excluir o aluno?')"><i class="fa fa-pencil-square-o" arial-hidden="true"></i>Deletar</button>
                                        </form>
                                    
                                        </td>
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