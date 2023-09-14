<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class turmaController extends Controller
{
    public function index(){

        $turmas = Turma::all();
        return view('turmas.index',compact('turmas')); 
         //Adicionei o (s) em compact e na variavel $turmas
    }

    public function create(){
        $turmas = Turma::all();
        $alunos = Aluno::all();
        return view('turmas.create',compact('turmas'));
         //Adicionei o (s) em compact e na variavel $turmas
    }
    
    public function store(Request $request){

        $data = $request->all();
        $turmas =  Turma::create($data);
        return view ('turmas.index' ,compact('turmas'));
        //Adicionei o (s) em compact e na variavel $turmas
    }
    public function show($id){
       
        $turmas = Turma::findOrFail($id);
        return view ('turmas.show', compact ('turmas'));

    }
    public function edit($id){
        $turmas = Turma::findOrFail($id);
        return view('turmas.edit')->with('turmas',$turmas);
    }
    public function update(Request $request,$id){
   
   
     $turmas = Turma::findOrFail($id);
      $data = $request->all();
      $turmas -> update($data);
     
      return redirect('/turmas')->with('flash_message', 'Turma atualizada');
    }
    public function destroy ($id){
        $turmas = Turma::FindOrFail($id);
        $turmas -> delete();
        $turmas = Turma::all();
        return view('turmas.index',compact('turmas'));
    }

}
