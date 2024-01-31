<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtenteModel extends Model
{
    use HasFactory;
    protected $table='utente';
    protected $fillable =['id_utente','numero_utilizador','data_nascimento','morada','localidade','cod_postal','entidade_finaceira','num_endidada_finaceira'];
}
