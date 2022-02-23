<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function home() {
        return view('home', [
            "title" => "home",
            "body" => Home::all()
        ]);
    }
}
