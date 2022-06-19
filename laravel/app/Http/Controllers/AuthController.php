<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'unique:users,name'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('main'));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (auth('web')->attempt($data))
        {
            return redirect(route('main'));
        }

        return redirect(route('login'))->withErrors(['name'=>'Don\'t find']);
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('main'));
    }
}
