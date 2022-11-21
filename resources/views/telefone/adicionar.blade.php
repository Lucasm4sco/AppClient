@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('cliente')}}">Lista de Clientes</a></li>
                        <li class="breadcrumb-item"><a href="{{route('detalhe_cliente', $cliente['id'])}}">Detalhes do cliente</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar telefone</li>
                    </ol>
                </nav>

                <div class="card-body overflow-auto">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ Session::forget('status') }}
                        </div>
                    @elseif (session('status_error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status_error') }}
                            {{ Session::forget('status_error') }}
                        </div>
                    @endif
                
                    <form action="{{route('salvar_telefone', $cliente['id'])}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Titulo do telefone">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Número</label>
                            <input type="text" name="telefone" required class="form-control" id="telefone" placeholder="Número do telefone">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

