<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{

    public function index(){

        $users = User::all();
        return Inertia::render('User/ListUser',
        ['users' => $users]
        );
    }
}
