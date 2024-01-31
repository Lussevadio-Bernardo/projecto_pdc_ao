<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoalClinicoModel extends Model
{
    use HasFactory;
    protected $table = 'pessoaclinico';
    protected $fillable = ['id_pessoal_clinico','estado','id_especialidade','id_admin'];
}
