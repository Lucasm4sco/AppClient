<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Telefone;

class TelefoneFactory extends Factory
{
   
    protected $model = Telefone::class;

    public function definition()
    {
        return [
            'titulo' => fake()->name(),
        ];
    }
}
