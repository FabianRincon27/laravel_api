<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function showRandomUsers()
    {
        $response = Http::get('https://randomuser.me/api/?results=50'); // Obtener 10 usuarios random
        $users = $response->json()['results'];

        return view('home', compact('users'));
    }
}
