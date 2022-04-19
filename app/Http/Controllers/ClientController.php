<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index(){

        $clients = Client::all();

        return Inertia::render('Clients/listClients',
        ['clients' => $clients]
        );
    }
    public function create(){
        return Inertia::render('Form');
    }
    public function edit(){

    }
    public function update(){

    }

    public function delete(){


    }


}

