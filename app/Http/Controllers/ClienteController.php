<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

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

    public function detalhe($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.detalhe', compact('cliente'));
    }

    public function salvar(ClienteRequest $request)
    {
        Cliente::create([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'endereco' => $request['endereco'],
            'telefone' => $request['telefone']
        ]);
        return redirect()->route('adicionar_cliente')->with('status', 'Cliente adicionado com sucesso!');
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            return redirect()->route('adicionar_cliente')->with('status_error', 'Cliente não existente! Cadastrar:');
        }

        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(ClienteRequest $request, $id)
    {
        Cliente::find($id)->update([
            'nome' => $request['nome'],
            'email' => $request['email'],
            'endereco' => $request['endereco'],
            'telefone' => $request['telefone']
        ]);

        return redirect()->route('cliente')->with('status', 'Cliente atualizado com sucesso!');
    }

    public function deletar($id)
    {
        $cliente = Cliente::find($id);
        $cliente->deletarTelefones();
        $nome = $cliente['nome'];
        $cliente->delete();
        session(['status' => "Cliente $nome foi deletado!"]);
    }
}
