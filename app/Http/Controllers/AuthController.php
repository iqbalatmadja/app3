<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return "";
    }  

    public function register()
    {
        return view('auth.register');
    }

    public function process_register(Request $request)
    {
        $customMessages = [
            'name.required' => 'The Name field is required',
            'email.required' => 'The Email field is required',
            'password.required' => 'The Password field is required',
            'email.unique' => 'The Email is taken',
        ];
        $request->validate([
            'name' => 'required|string|max:64',
            'email' => 'required|email:max:64|unique:users',
            'password' => 'required|min:8'
        ],$customMessages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->with('msg','You have successfully registered & logged in!');
    }

    public function login()
    {
        return view('auth.login');
    } 

    public function process_login(Request $request)
    {
        echo 'process login here';
    }  

    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->with('msg','You have logged out successfully!');
    }
}
