<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoalAdmin extends Model
{
    use HasFactory;

    protected $table = 'pessoa_admistrativa';
    protected $fillable = ['id_admin','tipo_admin'];
}
