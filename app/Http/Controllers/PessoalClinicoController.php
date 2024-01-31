<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\PessoalClinicoModel;
use App\Models\EspecialidadeModel;
use App\Models\User;
use App\Http\Requests\AtualizarPclinicoRequest;
use App\Http\Requests\PessoalClinicoRequest;
use App\Http\Requests\EspecificarHoraRequest;
use App\Http\Requests\PalavrapassRequest;
use App\Models\HorarioModel;

class PessoalClinicoController extends Controller
{
    public function ver_pessoal_clinico(){
        $dados_pessoal_clinico=DB::table('users')->join('pessoaclinico','users.id','=','pessoaclinico.id_pessoal_clinico')
        ->join('especialidade','pessoaclinico.id_especialidade','=','especialidade.id_especialidade')
        ->select('users.*','pessoaclinico.*','especialidade.*')->get();
       
        return view('pessoalClinico.ver_pessoal_clinico',compact('dados_pessoal_clinico'));
    }
   
    function crearPessoalClinico(){
        $dadosEspe = EspecialidadeModel::get(); 
        return view('pessoalClinico.FormularioPessoalClinico',compact('dadosEspe'));
    }
    public function enviarDadosPessoalClinico(PessoalClinicoRequest $request){
        $email=User::where("email","=",$request->email)->first();
        $bi=User::where("num_bi","=",$request->nbi)->first();
            if($email){
                return back()->withErrors([
                    'email' => 'Email já existe ',
                ]);
            }else if($bi){
                return back()->withErrors([
                    'nbi' => 'Número do Bilhete já existe ',
                ]);
            }
             $caminho_imagem=$request->file('image');   
             $nome_image = $caminho_imagem->getClientOriginalName();
             $caminho_imagem->move(public_path(),$nome_image);
             $user = User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'genero'=>$request->genero,
                'password' => Hash::make($request->ter),
                'telemovel'=>$request->ter,
                'num_bi'=>$request->nbi,
                'imagem'=> $nome_image,
            ])->givePermissionTo('pclinico');
           
            event(new Registered($user));
            $id_admin=Auth::user()->id;
            $especialida=EspecialidadeModel::where("nome_especialidade","=",$request->especialidade)->first();
            $pclinico=PessoalClinicoModel::create([
                'id_pessoal_clinico'=> $user->id,
                'id_especialidade'=>$especialida->id_especialidade,
                'id_admin'=>$id_admin,
                'estado'=>0,
            ]);
            DB::table("horario_atendimento")->insert([
                'id_pclinico'=> $pclinico->id_pessoal_clinico,        
            ]);        
        return redirect()->route('verPessoalclinico');   
    }
    function editar($email){
        $descriptografa=Crypt::decryptString($email);
        $dadosPc= User::where("email","=",$descriptografa)->first();
        
        $dadosEspecial= EspecialidadeModel::get();
        if(!$dadosPc){
            return redirect()->back();
        }
        return view('pessoalClinico.AtualizarPessoalClinico', compact('dadosPc','dadosEspecial'));
    }
   
    function especificarHorario($email){
        $descriptografa=Crypt::decryptString($email);
        $dadosPc = User::where("email","=",$descriptografa)->first();
        if(!$dadosPc){
            return redirect()->back();
        }
        return view('pessoalClinico.FormularioEspecificarHorario',compact('dadosPc'));
    }

    function atualizarhoarrio(EspecificarHoraRequest $request, $id){
        $descriptografa=Crypt::decryptString($id);
        $dadosHorario=HorarioModel::where("id_pclinico","=",$descriptografa)->first();
        $affected = DB::table('horario_atendimento')->where('id_horario', $dadosHorario->id_horario)->update([
            'hora_saida'=>$request->hora_de_saida,
            'quantidade_dias'=>$request->dias_trabalho,
            'hora_entrada'=>$request->hora_entrada,
            'dias_semana'=>$request->dias_semana,
        ]);
        
        return redirect()->route('verPessoalclinico');
    }

    function atualizarDadosPessoalClinico(AtualizarPclinicoRequest $request,$emai){
        
        $descriptografa=Crypt::decryptString($emai);
        $dadosUsuario=User::where("email","=",$descriptografa)->first();
        $email=User::where("email","=",$request->email)->first();
            if($email){
                return back()->withErrors([
                    'email' => 'Email já existe ',
                ]);
            }
        $id_especialida=EspecialidadeModel::where("nome_especialidade","=",$request->especialidade)->first();
        User::where('id',$dadosUsuario->id)->update([
            'name'=>$request->nome,
            'email'=>$request->email,
            'genero'=>$request->genero,
            'telemovel'=>$request->ter,
        ]); 
       if($dadosUsuario->hasPermissionTo('adminMaster')){
            PessoalClinicoModel::where('id_pessoal_clinico',$dadosUsuario->id_pessoal_clinico)->update([
                 'id_especialidade'=>$id_especialida->id_especialidade,
            ]);
       }
        
        return redirect()->route('verPessoalclinico');
    } 
    function eliminarPessoalClinico($emai){
       
        $descriptografa=Crypt::decryptString($emai);
        $dadosUsuario=User ::where("email","=",$descriptografa)->first();
        if(!$dadosUsuario ){
            return redirect()->back();
        }
        $deleteda = DB::table('users')->where('id', '=',$dadosUsuario->id)->delete();
        if($deleteda){
            return redirect()->route('verPessoalclinico');
        }else{
            return redirect()->back();
        }
    }
    function atualizar_palavrapasse(){
        return view('pessoalClinico.FormularioAtualizarPalavraPass');
    }
    function editar_palavra_passe(PalavrapassRequest $request){

        if(Hash::check($request->senha_antiga,Auth::user()->password)){
            if($request->senha_nova == $request->confirmar_senha){
        
                User::where('id',Auth::user()->id)->update([
                    'password'=>Hash::make($request->senha_nova),
                ]); 
                return redirect('/');
            }else{
                return back()->withErrors([
                    'confirmar_senha' => 'Senha de confirmação deve ser igual a senha nova',
                ]);
            }
           
        }else{
            return back()->withErrors([
                'senha_antiga' => 'Esta senha não existe. Tente novamente ',
            ]);
        }
    
    }
}
