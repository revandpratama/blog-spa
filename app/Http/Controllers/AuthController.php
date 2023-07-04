<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function loginIndex() 
    {
        return Inertia::render('Auth/Login', [
            
        ]);
    }
    public function login(Request $request) 
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }


        return back()->withErrors(['email' => 'Email or Password does not match']);
    }
    public function registerIndex() 
    {
        return Inertia::render('Auth/Register', [
            
        ]);
    }
    public function register(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'passwordMatch' => 'required'
        ]);

        if ($request->password !== $request->passwordMatch) {
            return back()->withErrors(['password' => 'password does not match']);
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/')->with('Account successfully created');
    }


    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/');

    }


}
