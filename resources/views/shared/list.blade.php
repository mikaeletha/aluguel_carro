@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>
    <div class="mb-3">
        <a href="{{ $route }}" class="btn btn-primary">{{ $buttonText }}</a>
    </div>

    @if ($items->isEmpty())
        <p class="text-center">Não há registros cadastrados.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    @foreach ($columns as $column)
                        <th>{{ $column }}</th>
                    @endforeach
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        @foreach ($columns as $key => $column)
                            <td>{{ $item->$key }}</td>
                        @endforeach
                        <td><a href="#">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $items->links() }}
    @endif
@endsection
