@extends('turmas.layout');
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Turmas</h2>
                    </div>
                        <div class="card-body">
                            <a href="{{url('/turmas/create')}}" class="btn btn-success btn-sm" title="Criar turma">Criar nova turma</a>
        
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>curso</th>
                                        <th>codigo</th>
                                        <th>turno</th> 
                                        <tr>       
                                    </thead>

                                    <tbody>
                                        @foreach($turmas as $turma)
                                        <tr>
                                            <td>{{$turma->curso}}</td>
                                            <td>{{$turma->codigo}}</td>
                                            <td>{{$turma->turno}}</td>
                                            <!--Adicionei o (s) na variavel $turmas-->
                                            <!--Tirei o (s) pq não estava funcionando DAI :)-->
                                    
                                            <td>
                                            <a href="{{url('/turmas/' . $turma->id)}}" title="Detalhes"><button class="btn btn-info btn-sm"><i class="fa fa-eye" arial-hidden="true"></i>Detalhes</button></a>
                                            <!--Adicionei o (s) na variavel $turmas-->
                                            <a href="{{url('/turmas/' . $turma->id . '/edit')}}" title="Editar aluno"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" arial-hidden="true"></i>Editar</button></a>
                                            <!--Adicionei o (s)  na variavel $turmas-->

                                            <form action="/turmas/destroy/{{$turma->id}}" method="GET" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Deletar turma" onclick="return confirm('Tem certeza que deseja excluir a turma?')"><i class="fa fa-pencil-square-o" arial-hidden="true"></i>Deletar</button>     
                                                        
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
