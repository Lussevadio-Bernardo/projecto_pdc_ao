<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\UtenteModel;
use App\Models\Acesso;
use App\Models\PessoalAdmin;
use App\Http\Requests\LoginRequest;
use Spatie\Permission\Traits\hasPermissionTo;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class LoginControll extends Controller
{
    public function log(){
        return view('login');
    }
    public function enviarDados(LoginRequest $request){  
        if( Auth::attempt(['email'=>$request->user,'password'=>$request->password])){
            $request->session()->regenerate();
            $useres=Auth()->user();
           if($useres->hasPermissionTo('admin')){
                
                return redirect()->route('indexAdmin'); 
           }else if($useres->hasPermissionTo('utente')){
               
                return redirect()->route('index_home'); 
           }elseif($useres->hasPermissionTo('pclinico')){
                
                 return redirect()->route('indexAdmin'); 
           }else if($useres->hasPermissionTo('adminMaster')){
                 
                 return redirect()->route('indexAdmin'); 
           }      
           return redirect()->back();
        }else{
            return back()->withErrors([
                'user' => 'Email ou palavra passe invalido.',
            ]);
        }
 
    }
    public function destroy(Request $request){
       
       
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

}
