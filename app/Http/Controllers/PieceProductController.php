<?php

namespace App\Http\Controllers;
use App\Models\PieceProduct;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PieceProductController extends Controller
{
    public function index(){

        $piece_product = PieceProduct::all();
        return Inertia::render('Piece/ListPieces',
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
