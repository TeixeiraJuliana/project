<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index(){

        $clients = Client::all();

        return Inertia::render('Client/ListClients',
        ['clients' => $clients]
        );
    }
    public function create(){
        return Inertia::render('Client/FormClient');
    }
    public function edit(){

    }
    public function update(){

    }

    public function delete(){


    }


}

