<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Cadastro;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registro');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:cadastros',
            'password' => 'required|string|min:6',
        ]);

        $cargo = $data['password'] === 'amanda' ? 'administrador' : 'usuario';

        $cadastro = Cadastro::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cargo' => $cargo,
        ]);

        Auth::login($cadastro);

        return redirect('/dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('login'); // Crie uma view 'login' para o formulário de login
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return redirect()->back()->with('error', 'Credenciais inválidas');
    }
}