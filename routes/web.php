<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoalAdminController;
use App\Http\Controllers\AcessoController;
use App\Http\Controllers\UtenteControll;
use App\Http\Controllers\LoginControll;
use App\Http\Controllers\PessoalClinicoController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\ConsultarController;
use App\Http\Controllers\PesquizaController;

use App\Http\Controllers\TesteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//=0=================================================================
/*Routas do projectos*/

/**Routas do login */

Route::get('/acesso',function(){
    return view('login');
})->name('acesso');

Route::get('/log',[LoginControll::class,'log'])->name('login.index');
Route::post('/Logado',[LoginControll::class,'enviarDados'])->name('logar');
Route::get('/logaut',[LoginControll::class,'destroy'])->name('logaut');


Route::post('/pesquiza',[PesquizaController::class,'pesquizas'])->name('pesquizar');



/** Routas do pessoal admin */
Route::get('/admin',function(){
    return view('admin.admin');
})->name('admin');

Route::get('/index',[PessoalAdminController::class,'index'])->name('indexAdmin');
Route::put('/tualizarPessoalAdmin/{email}',[PessoalAdminController::class,'editarPA'])->name('editarpa');
Route::get('/pessoalAdministadora/Criar',[PessoalAdminController::class,'crearPessoalAdmin'])->name('criarPessoalAdmin');
Route::get('/listarpessoalAdmin',[PessoalAdminController::class,'ver_pessoal_admin'])->name('verPessoalAdmin');
Route::post('/pessoalAdmin/Criar',[PessoalAdminController::class,'inserirpessaolAdmin'])->name('pessoalAdminCriar');
Route::get('/atualizarPessoalAdmin/{email}',[PessoalAdminController::class,'atualizarPA'])->name('atualizarPessoalAdmin');
Route::get('/Verdados/{email}',[PessoalAdminController::class,'eliminar'])->name('Eliminar/pessoalAdmin');

/**Routas do Utente */
Route::get('/', [UtenteControll::class, 'indexHome'])->name('index_home');
Route::post('/utente/criar',[UtenteControll::class,'enviarDadosUtente'])->name('utenteCriar');
Route::get('/criate/Utente',[UtenteControll::class,'crearUtente'])->name('create/Utente');
Route::get('/Editar/Utente/{id}',[UtenteControll::class,'editar_utente'])->name('editar/Utente');






/** Routas do pessoal clinico */
Route::get('/pessoalClinico',function(){
    return view('pessoalClinico.pessoalClinico');
});
Route::put('/atualizarPessoalClinico/{email}',[PessoalClinicoController::class,'atualizarDadosPessoalClinico'])->name('atualizarPClinico');
Route::get('/criarPessoalClinico',[PessoalClinicoController::class,'crearPessoalClinico'])->name('cadastrarPessoalclinico');
Route::post('/enviarDadosPessoalClinico',[PessoalClinicoController::class,'enviarDadosPessoalClinico'])->name('enviarPessoalclinico');
Route::get('/verPessoalClinico',[PessoalClinicoController::class,'ver_pessoal_clinico'])->name('verPessoalclinico');;
Route::get('/atualizarPessoalClinico/{email}',[PessoalClinicoController::class,'editar'])->name('atualizarPessaolClinico');
Route::get('/ListaPessoalClinico/{email}',[PessoalClinicoController::class,'eliminarPessoalClinico'])->name('eliminarPessoalClinico');
Route::get('/AtualiazarPalavraPasse',[PessoalClinicoController::class,'atualizar_palavrapasse'])->name('atualizarpass');
Route::get('/EspecificarHorario/{email}',[PessoalClinicoController::class,'especificarHorario'])->name('especificarHorario');
Route::put('/AtualizarHorario/{id}',[PessoalClinicoController::class,'atualizarhoarrio'])->name('atualizarHorario');
Route::put('/atualizarPalavrapasse',[PessoalClinicoController::class,'editar_palavra_passe'])->name('editar_palavrapase');



// Routas da especialidade
Route::post('/CrearEspecialidade}',[EspecialidadeController::class,'enviarDadosEspecialidade'])->name('enciarDadosEspecialidade');
Route::get('/CrearEspecialidade',[EspecialidadeController::class,'crearEspecialidade'])->name('cadastrarEspecialidade');
Route::get('/VerEspecialidade',[EspecialidadeController::class,'ver_especialidades'] )->name('verEspecialidade');
Route::get('/VerEspecialidade/{nome}',[EspecialidadeController::class,'eliminarEspecialidade'])->name('eliminarEspecialidade');

//ROutas Consulta
Route::post('/marcar/consulta',[ConsultarController::class,'marcar_consulta'])->name('Consulta');
Route::get('/listarConsulta',[ConsultarController::class,'ver_consulta'])->name('verconsulat');
Route::get('/ver/detalhes/Consulta/{id}',[ConsultarController::class,'ver_detalhes'])->name('verdetalhesconsulat');
Route::get('/associarMedicoConsulta/{id_medico}/{id_consul}',[ConsultarController::class,'associar_medico_consulta'])->name('associarmedicopaciente');
Route::put('/associar_MedicoConsulta/{id_pclin}/{id_consult}',[ConsultarController::class,'atualizar_consulta'])->name('associado_medico_consulta');
Route::get('/marcaComoLida/{id}',[ConsultarController::class,'marcar_como_atendida'])->name('marcar_comoLida');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';