<?php

namespace App\Http\Controllers;

use App\Http\Requests\TelefoneRequest;
use App\Models\Cliente;
use App\Models\Telefone;

class TelefoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adicionar($id)
    {
        $cliente = Cliente::find($id);
        return view('telefone.adicionar', compact('cliente'));
    }

    public function salvar(TelefoneRequest $request, $id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            return redirect()->route('adicionar_cliente')->with('status_error', 'Cliente não existente! Cadastrar:');
        }
        $cliente->addTelefone(
            Telefone::create([
                'titulo' => $request['titulo'],
                'telefone' => $request['telefone'],
                'cliente_id' => $id
            ])
        );

        return redirect()->route('detalhe_cliente', $cliente['id'])->with('status', 'Telefone adicionado com sucesso!');;
    }

    public function editar($id)
    {
        $telefone = Telefone::find($id);
        return view('telefone.editar', compact('telefone'));
    }

    public function atualizar(TelefoneRequest $request, $id)
    {
        $telefone = Telefone::find($id);
        $telefone->update([
            'titulo' => $request['titulo'],
            'telefone' => $request['telefone']
        ]);
        return redirect()->route('detalhe_cliente', $telefone['cliente_id'])->with('status', 'Telefone atualizado com sucesso!');
    }

    public function deletar($id)
    {
        $telefone = Telefone::find($id);
        $titulo = $telefone['titulo'];
        $telefone->delete();
        session(['status' => "Telefone $titulo foi deletado!"]);
    }
}
