@extends('layouts.app')

@section('content')

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Deletar cliente</h4>
        <button class="bi bg-white border-0 fs-1" data-bs-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
        </button>
      </div>
      <div class="modal-body">
        <p>Você está prestes a deletar um telefone, tem certeza disso?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="deletar">Deletar</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('cliente')}}">Lista de Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalhes do cliente</li>
                    </ol>
                </nav>

                <div class="card-body overflow-auto pt-1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                    <p><strong>Cliente: </strong>{{$cliente['nome']}}</p>        
                    <p><strong>E-mail: </strong>{{$cliente['email']}}</p> 
                    <p><strong>Endereço: </strong>{{$cliente['endereco']}}</p>
                    <p>
                        <a href="{{ route('adicionar_telefone', $cliente['id']) }}" class="btn btn-info">Adicionar Telefone</a>
                    </p>
                    <table class="table table-bordered w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente->telefones as $tel)
                                <tr>
                                    <th scope="row">{{ $tel['id'] }}</th>
                                    <td>{{ $tel['titulo'] }}</td>
                                    <td>{{ $tel['telefone'] }}</td>
                                    <td class="d-flex flex-column gap-2">
                                        <a href="{{route('editar_telefone', $tel['id'])}}" class="btn btn-secondary btn-sm mb-2">Editar</a>
                                        <button type="button" class="btn btn-danger btn-sm btn-deletar" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="{{$tel['id']}}">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="/js/deletarTelefone.js"></script>
@endsection