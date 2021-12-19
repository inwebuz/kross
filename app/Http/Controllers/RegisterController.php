<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6|max:255',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->route('login')->with('success', 'Нou have successfully registered!');
    }
}
