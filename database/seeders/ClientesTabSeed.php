<?php

namespace Database\Seeders;

use App\Models\Telefone;
use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClientesTabSeed extends Seeder
{
    
    public function run()
    {
        Cliente::factory(10)->create()->each(function($cliente){

            $cliente->telefones()->save(
                Telefone::factory()->make([
                    'telefone' => $cliente->telefone
                ])
            );
            
            $cliente->telefones()->save(
                Telefone::factory()->make([
                    'telefone' => $cliente->telefone
                ])
            );
        });
    }
}
