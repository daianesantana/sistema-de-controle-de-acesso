<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Http\alunoController;
use App\Models\presenca;
use Carbon\Carbon;

class presencaController extends Controller
{
    public function index(){
        $presenca = Presenca::all();
        $alunos = Aluno::all();
        return view('presenca.index',compact('presenca')); 
    }

    public function create(){
        $presenca = Presenca::all();
        $alunos = Aluno::all();
        return view('presenca.create', compact('alunos'));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required',
            'data_presenca' => 'required|date',
            'presente' => 'required|boolean',
        ]);
    
        $alunoId = $request->aluno_id;
        $dataPresenca = Carbon::createFromFormat('Y-m-d', $request->data_presenca)->format('Y-m-d');
            
        // Verificar se já existe uma presença cadastrada
        $presencaExistente = Presenca::where('aluno_id', $alunoId)
        ->where('data_presenca', $dataPresenca)
        ->exists();

        if ($presencaExistente) {
            return redirect()->back()->withInput()->withErrors('Já existe uma presença cadastrada para este aluno nesta data.');
    }
    
        // Criar uma nova instância do modelo Presenca
        $presenca = new Presenca;
        $presenca->aluno_id = $alunoId;
        $presenca->data_presenca = $dataPresenca;
        $presenca->presente = $request->presente;
    
        // Salvar a presença no banco de dados
        $presenca->save();
    
        return redirect()->back()->with('success', 'Presença registrada com sucesso.');
    }
    

    /*
    public function validacao(){
        
        Presenca::where('alunos_id',$id)
        ->where('data_presenca',$data_presenca);

              if('data_presenca' && 'alunos_id' == true){
                  //Aluno ja registrou presença
              
              }elseif('data_presenca' && 'alunos_id' == false){
               

              }
    }

     

       */
} 

