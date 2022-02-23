<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function showAbout() {
        return view("about", [
            "title" => "about Me",
            "about" => About::all()
        ]);
    }
}
