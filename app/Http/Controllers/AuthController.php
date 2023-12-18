<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
 
        $request->validate([
            'name' => 'required|string|',
            'email' => 'required|string|',
            'password' => 'required|string|',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/login');
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('/datadiri');
        }


        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");   
    }
}