@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="{{ route('create_client') }}" class="btn btn-primary">Cadastrar Cliente</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="my-4">Lista de Clientes</h1>

        <!-- Tabela de Clientes -->
        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th>#</th> --}}
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Carteira de Motorista</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
                    <tr>
                        {{-- <td>{{ $client->id }}</td> --}}
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->birth_date }}</td>
                        <td>{{ $client->driver_license_number }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" class="text-center">Não há clientes cadastrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Paginação -->
        <div class="d-flex justify-content-center">
            {{ $clients->links() }}
        </div>
    </div>
@endsection
