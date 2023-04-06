<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Http\Requests\StoreClientesRequest;
use App\Http\Requests\UpdateClientesRequest;

class ClientesController extends Controller
{

    public function index()
    {
        return view('clientes.index');
    }


    public function create()
    {
    }

    public function store(StoreClientesRequest $request)
    {
    }


    public function show(Clientes $clientes)
    {
    }


    public function edit(Clientes $clientes)
    {
    }

    public function update(UpdateClientesRequest $request, Clientes $clientes)
    {
    }

    public function destroy(Clientes $clientes)
    {
    }
}
