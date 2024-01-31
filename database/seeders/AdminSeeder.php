<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\PessoalAdmin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = User::create([
            'name' => 'pdcAo',
            'email' => 'pdcao@gmail.com',
            'genero'=>'desconhecido',
            'password' => Hash::make('pdcao'),
            'telemovel'=>900000000,
            'num_bi'=>'desconhecido',
            'imagem'=> 'este.ja',
        ])->givePermissionTo('adminMaster');

        event(new Registered($user));
        
         
         PessoalAdmin::create([
                'id_admin'=>$user->id,
                'tipo_admin'=>"master",
            ]);
    }
}
