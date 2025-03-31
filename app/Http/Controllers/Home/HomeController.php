<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index($clientId): View
    {
        return view('home', ['clientId' => $clientId]);
    }
}
