<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'dateofbirth' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone' => $request ->phone,
            'address' => $request ->address,
            'dateofbirth' => $request ->dateofbirth,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login');
    }
}
