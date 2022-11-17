@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Lista de Clientes</li>
                    </ol>
                </nav>

                <div class="card-body overflow-auto pt-1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a href="{{ route('adicionar_cliente') }}" class="btn btn-info">Adicionar</a>
                    </p>

                    @if (!empty($clientes))
                        
                           <table class="table table-bordered w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Endereço</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <th scope="row">{{ $cliente['id'] }}</th>
                                        <td>{{ $cliente['nome'] }}</td>
                                        <td>{{ $cliente['email'] }}</td>
                                        <td>{{ $cliente['endereco'] }}</td>
                                        <td class="d-flex flex-column gap-2">
                                            <button type="button" class="btn btn-secondary btn-sm mb-2">Editar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            
                            </table> 

                        <div align="center" class="mt-4">
                            {!! $clientes->links() !!}
                        </div>
                    @else
                        <p class="lead">
                            Não há clientes ainda                     
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection