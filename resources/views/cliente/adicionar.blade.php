@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('cliente')}}">Lista de Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar cliente</li>
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
                
                    <form action="{{route('salvar_cliente')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome" name="nome" required placeholder="Nome do cliente">
                            @if ($errors->has('nome'))
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $errors->first('nome') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" required class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="E-mail do cliente">
                            @if ($errors->has('email'))
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" id="endereco" name="endereco" required placeholder="Endereço do cliente">
                            @if ($errors->has('endereco'))
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $errors->first('endereco') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" id="telefone" name="telefone" required placeholder="Telefone do cliente">
                            @if ($errors->has('telefone'))
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $errors->first('telefone') }}
                                </div>
                            @endif
                        
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection