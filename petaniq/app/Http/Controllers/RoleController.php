<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class RoleController extends Controller
{

    //login
    public function showLoginForm()
    {
        return view('login');
    }

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(Request $request)
    {
        // dd($request->session());

        $this->validate($request, [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $kategori = user::where('email',$request->email)->value('kategori');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && $kategori != 'admin' ) {
            return redirect()->intended('');
        }

        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // Admin Login
    public function showAdminLoginForm()
    {
        return view('adminlogin');
    }

    public function AdminLogin(Request $request)
    {
        // dd($request->session());

        $this->validate($request, [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $kategori = user::where('email',$request->email)->value('kategori');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && $kategori == 'admin') {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    //register
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:2555',
            'email' => 'required|unique:users',
            'password' => 'required',
            'kategori' => 'required',
            'phone' => 'required'
        ]);

        $request->validate(['passwordkonf' => 'required|required_with:password|same:password']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // Redirect to home page or show success message
        return redirect()->route('login')->with('success', 'You have successfully registered');
    }
}
