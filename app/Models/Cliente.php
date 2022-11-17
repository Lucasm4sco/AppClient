<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Telefone;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'telefone'
    ];

    public function telefones()
    {
        return $this->hasMany('App\Models\Telefone');
    }

    public function addTelefone(Telefone $tel)
    {
        return $this->telefones()->save($tel);
    }
}
