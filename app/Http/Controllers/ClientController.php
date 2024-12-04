<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('name', 'asc')->paginate(10);

        return view('shared.list', [
            'title' => 'Lista de Clientes',
            'buttonText' => 'Cadastrar Cliente',
            'route' => route('create_client'),
            'items' => $clients,
            'columns' => [
                'name' => 'Nome',
                'email' => 'Email',
                'phone' => 'Telefone',
                'birth_date' => 'Data de Aniversário',
                'driver_license_number' => 'Número da Licença',
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        Client::create($data);

        return redirect()->route('index_clients')->with('success', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
