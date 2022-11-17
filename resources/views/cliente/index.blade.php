@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de Clientes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (!empty($clientes))
                        <ol class="list-group list-group-numbered">
                            @foreach($clientes as $cliente)
                            <li class="list-group-item">{{ $cliente['nome'] }}</li>
                            @endforeach
                        </ol>
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