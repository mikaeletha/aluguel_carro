@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="jumbotron text-center">
        <h1>Bem-vindo à Página Inicial!</h1>
        <p>Este é um exemplo de página inicial da sua aplicação.</p>
        {{-- <p><a href="{{ route('clients.index') }}" class="btn btn-primary">Ver Clientes</a></p> --}}
    </div>
@endsection
