<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaModel extends Model
{
    use HasFactory;
    protected $table = 'consulta';
    protected $fillable = ['mensagem','data_marcacao','estado_consulta','estado_marcacao','id_utente','id_especialidade'];
}
