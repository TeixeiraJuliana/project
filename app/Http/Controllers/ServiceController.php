<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index(){

        $service = Service::all();
        return Inertia::render('Service/ListServices',
        ['service' =>  $service]
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
