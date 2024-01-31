<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspecialidadeModel extends Model
{
    use HasFactory;
    protected $table = 'especialidade';
    protected $fillable = ['nome_especialidade','descricao','id_padmin'];
}
