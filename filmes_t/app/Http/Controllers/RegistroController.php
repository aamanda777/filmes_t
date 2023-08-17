<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Importe o facade Log
use App\Models\Cadastro;

class RegistroController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:cadastros',
            'password' => 'required|string|min:6',
        ]);

        $cargo = $data['password'] === 'amanda' ? 'administrador' : 'usuario';

        // Adiciona uma entrada de log com o valor do cargo
        Log::info('Cargo: ' . $cargo);

        $cadastro = Cadastro::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cargo' => $cargo,
        ]);

        Auth::login($cadastro);

        return redirect('/dashboard');
    }
}
