<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use App\Models\Telefone;

class ClienteFactory extends Factory
{
    
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'endereco' => fake()->streetAddress(),
            'telefone' => fake()->phoneNumber()
        ];
    }
}
