<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\ConsultaModel;
use App\Models\EspecialidadeModel;
use App\Http\Requests\ConsultaRequest;
use App\Http\Requests\HoraRequest;
use App\Models\PessoalClinicoModel;
use App\Models\UtenteModel;
use App\Models\HorarioModel;
use App\Mail\contactoEmail;




class ConsultarController extends Controller
{
    function associar_medico_consulta($id_medico,$id_consul){
        $idDecriptadoMe=Crypt::decryptString($id_medico);
       
        $idDecriptadoConsulta=Crypt::decryptString($id_consul);
       
        $pclinco=PessoalClinicoModel::where("id_pessoal_clinico","=",$idDecriptadoMe)->first();
        
        return view('consulta_exames.associar_medicoConsulta',compact('pclinco','idDecriptadoConsulta'));
        
    }
    function ver_detalhes($id){
        $idDecriptado=Crypt::decryptString($id);
        
        $resultado_Utente=DB::table('consulta')->join('users','consulta.id_utente','=','users.id')
        ->join('especialidade','consulta.id_especialidade','=','especialidade.id_especialidade')
        ->select('consulta.*','users.*','especialidade.*')
        ->where('consulta.id_consulta',$idDecriptado)
        ->first();
        
        $resultadoPclinico=DB::table('users')->join('pessoaclinico','users.id','=','pessoaclinico.id_pessoal_clinico')
        ->join('horario_atendimento','pessoaclinico.id_pessoal_clinico','=','horario_atendimento.id_pclinico')
        ->select('users.*','pessoaclinico.*','horario_atendimento.*')
        ->where('pessoaclinico.id_especialidade',$resultado_Utente->id_especialidade)
        ->first();
       
        $dadosUtente=UtenteModel::where("id_utente","=",$resultado_Utente ->id)->first();
        $data_atual= Carbon::now();
        $idade=$data_atual->diffInYears($dadosUtente->data_nascimento);
        
        return view('consulta_exames.detalhesConsulta',compact('idade','resultado_Utente','resultadoPclinico'));
    }
    function ver_consulta(){
        $dados_geral=DB::table('users')->join('consulta','users.id','=','consulta.id_utente')
        ->join('especialidade','consulta.id_especialidade','=','especialidade.id_especialidade')
        ->select('users.*','consulta.*','especialidade.nome_especialidade')
        ->get();
        return view('consulta_exames.ver_consulta',compact('dados_geral'));
    }
    function marcar_consulta(ConsultaRequest $request){
       
         $dados_usuario=User::where("email","=",$request->email)->first();
         if(!$dados_usuario){
                return back()->withErrors([
                    'email' => 'Email não existe ',
                ]);
         }
         $especialida=EspecialidadeModel::where("nome_especialidade","=",$request->departamento)->first();
            $data_atual= Carbon::now();// pegar a data do sistema
            $id_utente=Auth::user()->id;
        $id_cunsulta = DB::table("consulta")->insertGetId([
            'mensagem'=>$request->messagem,
            'data_marcacao'=>$data_atual,
            'estado_consulta'=>0,
            'estado_marcacao'=>0,
            'id_utente'=>$id_utente,
            'id_especialidade'=>$especialida->id_especialidade
        ]);
        if(!$id_cunsulta==null){
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    function atualizar_consulta(HoraRequest $request,$id_pcli,$id_consul){
                $idDecriptadoMedico=Crypt::decryptString($id_pcli);
                $idDecriptadoconsulta=Crypt::decryptString($id_consul);
                $dadosUtente= DB::table('pessoaclinico')->join('horario_atendimento','pessoaclinico.id_pessoal_clinico','=','horario_atendimento.id_pclinico')
                ->join('consulta','pessoaclinico.id_pessoal_clinico','=','consulta.id_pessoal_clinico')  
                ->select('pessoaclinico.*','horario_atendimento.*','consulta.*')
                ->where('pessoaclinico.id_pessoal_clinico',$idDecriptadoMedico)
                ->first();
            if(!(Carbon::parse($request->data_atendimento)->eq(Carbon::parse($dadosUtente->data_marcacao)))){
                if(Carbon::parse($dadosUtente->hora_entrada)->lt(Carbon::parse($request->hora_atendimento)) && Carbon::parse($request->hora_atendimento)->lt(Carbon::parse($dadosUtente->hora_saida))){
                    if(Carbon::parse($dadosUtente->hora_atendimento)->eq(Carbon::parse($request->hora_atendimento))){
                        return back()->withErrors([
                            'hora_atendimento' => 'Já existe consulta marcada nesta hora.',
                        ]);
                    }else{
                        $id_consulta = DB::table('consulta')->where('id_consulta', $idDecriptadoconsulta)->update([
                            'estado_consulta'=>1,
                            'id_pessoal_clinico'=>$idDecriptadoMedico,
                            'data_consulta'=>$request->data_atendimento,
                            'hora_atendimento'=>$request->hora_atendimento        
                        ]);
                        if($id_consulta){
                            $variavel='Lussevadio Bernardo deu certo';
                            //Mail::to('novaisdavid.19@gmail.com')->send(new contactoEmail($variavel))
                            return redirect()->route('indexAdmin'); 
                        }else{
                            return redirect()->back();
                        }
                    }
                }else{
                    return back()->withErrors([
                        'hora_atendimento' => 'O Medico selecionado nao atendes a estas horas.',
                    ]);
                }
            }else{
                return back()->withErrors([
                    'hora_atendimento' => 'Data da marcação não pode ser a mesma com a data da consulta.',
                ]);
            }
    }

    function marcar_como_atendida($id){
        $idDecriptadoConsulta=Crypt::decryptString($id);
        $id_consulta = DB::table('consulta')->where('id_consulta', $idDecriptadoConsulta)->update([
            'estado_marcacao'=>1,
        ]);
        if($id_consulta){
            return redirect()->route('indexAdmin'); 
        }else{
            return redirect()->back();
        }

    }
}
