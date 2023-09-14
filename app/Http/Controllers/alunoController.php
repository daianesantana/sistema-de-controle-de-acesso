<?php

namespace App\Http\Controllers;
use App\Models\Aluno;
use App\Http\turmaController;
use App\Models\Turma;
use Illuminate\Http\Request;

class alunoController extends Controller
{
    public function index(){

        $alunos = Aluno::all();
        return view('alunos.index',compact('alunos')); 
    }
    public function create(){
        
        $turmas = Turma::all();
        $alunos = Aluno::all();
        return view('alunos.create', compact('turmas'));
        
    }
    public function store(Request $request){
      
        $data = $request->all();

        Aluno::create($data);
        $alunos = Aluno::all();
        return view ('alunos.index', compact ('alunos'));
    }
    public function show($id){

        $alunos = Aluno::findOrFail($id);
        return view ('alunos.show', compact ('alunos'));
    }
    public function edit($id){

        $alunos = Aluno::findOrFail($id);
        $turmas = Turma::all();
        return view('alunos.edit', compact ('alunos', 'turmas')) ;

    }
    public function update(Request $request,$id){

        $aluno = Aluno::findOrFail($id);
        $data = $request->all();
        $aluno -> update($data);
        return redirect('/alunos')->with('flash_message', 'Turma atualizada');
    }
    public function destroy ($id){

        $aluno = Aluno::FindOrFail($id);
        $aluno -> delete();
        $alunos = Aluno::all();
        //return view('alunos.create',compact('alunos'));
        return view ('alunos.index',compact('alunos'));
    }

    }
