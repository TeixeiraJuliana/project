<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PieceProductController extends Controller
{
    public function index(){

        $piece_product = PieceProduct::all();
        
        return Inertia::render('OrdemService/OrdemService',
        ['piece_product' =>  $piece_product]
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
