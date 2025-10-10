<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function status()
    {
        return response()->json(
            [
                'status' => 'ok',
                'message' => 'API está funcionando.'
            ],
            200
        );
    }

    public function clients()
    {
        $clients = Client::paginate(10);

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'sucesso',
                'data' => $clients
            ],
            200
        );
    }

    public function clientById($id)
    {
        $client = Client::find($id);

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'sucesso',
                'data' => $client
            ],
            200
        );
    }

    public function client(Request $request)
    {
        // check if ID is present in request
        if (!$request->id) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Client ID is required'
                ],
                400
            );
        }
        $client = Client::find($request->id);

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'sucesso',
                'data' => $client
            ],
            200
        );
    }

    public function addClient(Request $request) 
    {
        // create new client
        $client = new Client();

        // set client data
        $client->name = $request->name;
        $client->email = $request->email;

        // save client
        $client->save();

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'sucesso',
                'data' => $client
            ],
            200
        );
    }

    public function updateClient(Request $request)
    {
        if (!$request->id) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Client ID is required'
                ],
                400
            );
        }
        $client = Client::find($request->id);

        // update client data
        $client->name = $request->name;
        $client->email = $request->email;

        // save client
        $client->save();

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'sucesso',
                'data' => $client
            ],
            200
        );
    }

    public function deleteClient($id)
    {
        $client = Client::find($id);

        // delete client
        $client->delete();

        return response()->json(
            [
                'status' => 'ok',
                'message' => 'Client deleted successfully'
            ],
            200
        );
    }
}
