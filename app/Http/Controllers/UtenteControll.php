<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UtenteModel;
use App\Models\User;
use App\Models\PessoalClinicoModel;
use App\Models\EspecialidadeModel;
use App\Http\Requests\UtenteRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class UtenteControll extends Controller
{

    public function indexHome(){
        $dadosUsuario=User::get();
        $especialidade = EspecialidadeModel::get();
        $dadosPc = PessoalClinicoModel::get();
        
        $dados=DB::table('users')->join('pessoaclinico','users.id','=','pessoaclinico.id_pessoal_clinico')
        ->join('especialidade','pessoaclinico.id_especialidade','=','especialidade.id_especialidade')
        ->select('users.*','especialidade.*')->get();
      
        return view('home.index',compact('dados'));
    }



    function pegarDadosDoUtente(){
        $dadosUtente =UtenteModel::get();
        return view('home.index',compact('dadosUtente'));
    }
     
    function crearUtente(){
        return view('utente.formulario');
    }
    public function enviarDadosUtente(UtenteRequest $request){

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
           if($request->password!=$request->password_confirma){
                return  back()->withErrors([
                'password_confirma'=>'Verifica a palavra passe',
             ]);
            }
           $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'genero'=>$request->genero,
            'password' => Hash::make($request->password),
            'telemovel'=>$request->terminal,
            'num_bi'=>$request->bi,
            'imagem'=> $nome_image,
        ])->givePermissionTo('utente');

        event(new Registered($user));     
        $id_utente = DB::table("utente")->insertGetId([
            'id_utente'=>$user->id,
            'data_nascimento'=>$request->data_nascimento,
            'morada'=>$request->morada,
            'localidade'=>$request->localidade,
            'cod_postal'=>$request->codigo_postal,
            'numero_utilizador'=>67,
            'entidade_finaceira'=>$request->entidade_financeira,
            'num_endidada_finaceira'=>$request->n_entidade_financeira,  
        ]);
        
        
          return redirect()->route('login.index');
            
    }
     function editar_utente($id){
        $dadosUtente=UtenteModel::where("id_usuario","=",$id)->first();
        if($dadosUtente->id_usuario!=null){
            $dadosUsuario=User::where("id","=",$dadosUtente->id_usuario)->first();
            if($dadosUsuario->id_usuario!=null){
                return view('utente.AtualizarUtente',compact('dadosUtente','dadosUsuario'));
            }else{
                return redirect()->back();
            }
        }else{
           return redirect()->back();
        }
        return redirect()->back();
     }
}
