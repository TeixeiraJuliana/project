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
    public function store(Request $request){
            Client::create([
                'name_client' =>$request->name_client,
                'email' =>  $request->email,
                'phone' => $request->phone,
                'cpf' =>  $request->cpf
            ]);
            return redirect()->route('clients.index');
    }
    public function edit(){

    }
    public function update(){

    }

    public function delete(){


    }


}

