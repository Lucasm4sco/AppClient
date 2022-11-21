@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('cliente')}}">Lista de Clientes</a></li>
                        <li class="breadcrumb-item"><a href="{{route('detalhe_cliente', $telefone['cliente_id'])}}">Detalhes do cliente</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar telefone</li>
                    </ol>
                </nav>

                <div class="card-body overflow-auto">
                
                    <form action="{{route('atualizar_telefone', $telefone['id'])}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control {{ $errors->has('titulo') ? 'is-invalid' : '' }}" id="titulo" name="titulo" required placeholder="Título do telefone" value="{{$telefone['titulo']}}">
                            @if ($errors->has('titulo'))
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $errors->first('titulo') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Número</label>
                            <input type="text" name="telefone" required class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" id="telefone" placeholder="Número do telefone" value="{{$telefone['telefone']}}">
                            @if ($errors->has('telefone'))
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    {{ $errors->first('telefone') }}
                                </div>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

