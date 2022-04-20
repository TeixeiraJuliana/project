<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderServiceController extends Controller
{
    public function index(){

        $order_service = OrderService::all();

        return Inertia::render('OrdemService/OrdemService',
        ['order_service' =>  $order_service]
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
