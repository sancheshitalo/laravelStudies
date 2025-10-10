<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Listagem de clientes realizada com sucesso.',
                'data' => $clients,
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate da request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'required'
        ]);

        // add newClient to db
        $client = Client::create($request->all());

        // devolver resposta
        return response()->json(
            [
                'status' => 'success',
                'message' => 'Cadastro realizado com sucesso.',
                'data' => $client,
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);

        if (!$client) {
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Cliente não encontrado.',
                ],
                404
            );
        }

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Cliente encontrado com sucesso.',
                'data' => $client,
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate da request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email,' . $id,
            'phone' => 'required'
        ]);

        // update client in db
        $client = Client::find($id);

        // verificar se o client existe
        if ($client) {
            $client->update($request->all());

            return response()->json(
                [
                    'message' => 'Cliente atualizado com sucesso.',
                    'data' => $client
                ], 200
            );
        } else {
            return response()->json(['message' => 'Cliente não encontrado.'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        if(!$client){
            return response()->json(
                [
                    'status' => 'error',
                    'message' => 'Cliente não encontrado.'
                ], 404
            );
        }

        $client->delete();
        
        return response()->json(
            [
                'status' => 'sucesso',
                'message' => 'Cliente deletado com sucesso.'
            ], 200
        );
    }
}
