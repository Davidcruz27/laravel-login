<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
{
    return view('auth.login');
}

public function register()
{
    return view('auth.register');
}

public function authenticate(Request $request)
{
    // Validar los datos del formulario de inicio de sesión
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Intentar autenticar al usuario
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        
        return redirect()->intended('/');
    }

    // Si la autenticación falla, redirigir de vuelta al formulario de inicio de sesión
    return back()->withErrors([
        'email' => 'Las credenciales proporcionadas no son válidas.',
    ])->onlyInput('email');
}

public function store(Request $request)
{
    // Validar los datos del formulario de registro
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Crear el nuevo usuario
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
    ]);

    // Autenticar al usuario y redirigirlo a la ruta 'dashboard'
    Auth::login($user);
    return redirect()->intended('dashboard');
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
}
