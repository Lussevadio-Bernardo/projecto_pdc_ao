<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquizaController extends Controller
{
   public function pesquizas(Request $request){
        dd("Pesquizando por  {$request->pesquisa}");
    }
}
