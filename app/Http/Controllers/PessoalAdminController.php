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
use App\Models\User;
use App\Models\PessoalAdmin;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AtualizarAdminRequest;




class PessoalAdminController extends Controller
{
    public function index(){
       return view("admin.admin");
    }

    function ver_pessoal_admin(){
       $dadosUsuario= DB::table('users')->join('pessoa_admistrativa','users.id','=','pessoa_admistrativa.id_admin')
        ->select('users.*','pessoa_admistrativa.*')->get();
        return view('admin.verpessoalAdmin',compact('dadosUsuario'));
    }
    public function crearPessoalAdmin(){
        return view("admin.FormularioPessoalAdmin");
    }
   
    public function inserirpessaolAdmin(AdminRequest $request){
        $email=User::where("email","=",$request->email)->first();
        $bi=User::where("num_bi","=",$request->bi)->first();
            if($email){
                return back()->withErrors([
                    'email' => 'Email já existe ',
                ]);
            }else if($bi){
                return back()->withErrors([
                    'bi' => 'Número do Bilhete já existe ',
                ]);
            }
      
        
        $caminho_imagem=$request->file('imagem');   
        $nome_image = $caminho_imagem->getClientOriginalName();
        
        $caminho_imagem->move(public_path(),$nome_image);   
            $user = User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'genero'=>$request->genero,
                'password' => Hash::make($request->terminal),
                'telemovel'=>$request->terminal,
                'num_bi'=>$request->bi,
                'imagem'=> $nome_image,
            ])->givePermissionTo('admin');
    
            event(new Registered($user));
          
             
             PessoalAdmin::create([
                    'id_admin'=>$user->id,
                    'tipo_admin'=>"normal",
                ]);
       return redirect()->route('verPessoalAdmin');
        
    }

    function atualizarPA($email){
        $descriptografa=Crypt::decryptString($email);
        $dadosPa= User::where("email","=",$descriptografa)->first();
        if(!$dadosPa){
            return redirect()->back();
        }
        return view('admin.AtualizarPessoalAdmin', compact('dadosPa'));
    }

    function editarPA(AtualizarAdminRequest $request, $emai){
        $descriptografa=Crypt::decryptString($emai);
        $dadosPa=User::where("email","=",$descriptografa)->first();
        if(!$dadosPa){
            return redirect()->back();
        }
         User::where("id",$dadosPa->id)->update([
            'name'=>$request->nome,
            'email'=>$request->email,
            'telemovel'=>$request->terminal,
        ]);
        return redirect()->route('verPessoalAdmin'); 
        
    }
    public function eliminar($emai){
        $descriptografa=Crypt::decryptString($emai);
        $dadosUsuario= User::where("email","=",$descriptografa)->first();
        $dadosPa= PessoalAdmin::where("id_admin","=",$dadosUsuario->id)->first();
        if(!$dadosPa or !$dadosUsuario){
            return redirect()->back();
        }
        User::where("id",$dadosUsuario->id)->delete();
        PessoalAdmin::where("id_admin",$dadosPa->id_admin)->delete();
        return redirect()->route('verPessoalAdmin');
    }
    


}
