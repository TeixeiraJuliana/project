<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        $users = User::all();
        return Inertia::render('User/ListUser',
        ['users' => $users]
        );
    }
}
