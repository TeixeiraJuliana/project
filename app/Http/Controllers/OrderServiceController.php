<?php

namespace App\Http\Controllers;
use App\Models\OrderService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderServiceController extends Controller
{
    public function index(){

        $order_service = OrderService::all();
        return Inertia::render('OrdemService/ListOrdemService',
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
