<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function index()
    {
        $clients = Client::paginate(3);
        return view("pages.clients.index",[
            "clients" => $clients
        ]);
    }

    public function create()
    {
        return view('pages.clients.create');
    }

    public function store(StoreUpdateRequest $request){
        
        Client::create([
            "nome" => $request->nome,
            "email"=> $request->email
        ]);
        return view("pages.clients.create",[
            'status' => "Cliente Adicionado"
        ]);
    }

    public function edit($id)
    {

        $client = Client::find($id);
        if(!$client){
            return view("pages.clients.index",[
                "clients" => Client::all(),
                "status"  => "Cliente Não Encontrado"
            ]);
        }


        return view('pages.clients.edit',[
            "client" => $client
        ]);
    }

    public function update(StoreUpdateRequest $request,$id)
    {
        $client = Client::find($id);
        if(!$client){
            return redirect()->back();
        }
        $client->update($request->all());

        return redirect()->route('clients.index');

    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if(!$client){
            return redirect()->back();
        }
        $client->delete($id);

        return redirect()->route('clients.index');

    }
}
