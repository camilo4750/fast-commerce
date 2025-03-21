<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($clientId)
    {
        return view('home', ['clientId' => $clientId]);
    }
}
