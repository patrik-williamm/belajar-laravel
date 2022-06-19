<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {

        return view('register.index', [
            'title' => 'Registrasi Account',
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email|email:dns',
            'password' => 'required|min:5',
        ]);

        if($validateData['password'] !== $request['verifikasiPass']) {
            return redirect('/register')->with('status_verification', 'passwords out of sync');
        }

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        return redirect('/login')->with('status', "successfully registered");
    }
}