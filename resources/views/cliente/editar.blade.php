@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('cliente')}}">Lista de Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar cliente</li>
                    </ol>
                </nav>

                <div class="card-body overflow-auto">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('status_error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status_error') }}
                        </div>
                    @endif
                
                    <form action="{{route('atualizar_cliente', $cliente['id'])}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required placeholder="Nome do cliente" value="{{$cliente['nome']}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" required class="form-control" id="email" placeholder="E-mail do cliente" value="{{$cliente['email']}}">
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required placeholder="Endereço do cliente" value="{{$cliente['endereco']}}">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required placeholder="Telefone do cliente" value="{{$cliente['telefone']}}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection