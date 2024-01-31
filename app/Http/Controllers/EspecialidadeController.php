<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EspecialidadeModel;
use App\Models\PessoalClinicoModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EspecialidadeRequest;

class EspecialidadeController extends Controller
{
    function ver_especialidades(){
        $dadosEspe = EspecialidadeModel::get(); 
        return view('especialidades.ver_especialidade',compact('dadosEspe'));
    }
   
    function crearEspecialidade(){
        return view('especialidades.FormularioEspecialidade');
    }
    function enviarDadosEspecialidade(EspecialidadeRequest $request){
        
        $id_admin=Auth::user()->id;
        EspecialidadeModel::create([
                'nome_especialidade'=>$request->nome,
                'descricao'=>$request->area,
                'id_padmin'=>$id_admin,
            ]);
               return redirect()->route('verEspecialidade');
    }
    function eliminarEspecialidade($nome){
        $dadosEspe=EspecialidadeModel::where("nome_especialidade","=",$nome)->first();
        if(!$dadosEspe){
            return redirect()->back();
        }
        EspecialidadeModel::where("id_especialidade",$dadosEspe->id_especialidade)->delete();
        
        return redirect()->route('verEspecialidade');
    }

   
}
