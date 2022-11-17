<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::paginate(15);
        return view('cliente.index', compact('clientes'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(Request $request)
    {
        Cliente::create([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'endereco' => $request['endereco'],
            'telefone' => $request['telefone']
        ]);
        return redirect()->route('adicionar_cliente')->with('status', 'Cliente adicionado com sucesso!');
    }
}
