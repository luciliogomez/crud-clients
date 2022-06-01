<?php

namespace App\Http\Controllers;

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

    public function store(){

    
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
