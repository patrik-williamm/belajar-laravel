<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', ['title' => 'Login']);
    }

    public function authenticate(Request $request) {
        
        $credetials =   $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credetials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return redirect('/login');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login');
    }
} 
