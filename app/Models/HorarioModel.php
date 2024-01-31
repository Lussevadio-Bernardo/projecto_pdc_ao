<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioModel extends Model
{
    use HasFactory;
    protected $table = 'horario_atendimento';
    protected $fillable = ['hora_saida','quantidade_dias','hora_entrada','dias_semana','id_pclinico'];
}
