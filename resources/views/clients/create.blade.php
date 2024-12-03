@extends('layouts.app')

@section('title', 'Criar Novo Cliente')

@section('content')
    <h2>Criar Novo Cliente</h2>

    <form action="{{ route('store_client') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}" required>

            <!-- Exibir erro -->
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required>

            <!-- Exibir erro -->
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                value="{{ old('phone') }}" required>

            <!-- Exibir erro -->
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="birth_date">Data de Nascimento:</label>
            <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date"
                name="birth_date" value="{{ old('birth_date') }}" required>

            <!-- Exibir erro -->
            @error('birth_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="driver_license_number">Número da Carteira de Motorista:</label>
            <input type="text" class="form-control @error('driver_license_number') is-invalid @enderror"
                id="driver_license_number" name="driver_license_number" value="{{ old('driver_license_number') }}" required>

            <!-- Exibir erro -->
            @error('driver_license_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="driver_license_validity">Validade da Carteira:</label>
            <input type="date" class="form-control @error('driver_license_validity') is-invalid @enderror"
                id="driver_license_validity" name="driver_license_validity" value="{{ old('driver_license_validity') }}"
                required>

            <!-- Exibir erro -->
            @error('driver_license_validity')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password" required>

            <!-- Exibir erro -->
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
