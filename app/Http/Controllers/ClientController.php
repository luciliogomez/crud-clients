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
        return view("pages.clients.index");
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

    public function edit()
    {

        return view('pages.clients.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
