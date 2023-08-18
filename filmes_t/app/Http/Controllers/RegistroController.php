<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cadastro;

class RegistroController extends Controller
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
            'cargo' => 'required|string',
        ]);
    
        // Determine o cargo com base nas credenciais ou outro critério
        $cargo = $data['cargo'];
    
        // Crie o registro com o cargo determinado
        $cadastro = Cadastro::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cargo' => $cargo,
        ]);
    
        Auth::login($cadastro);
    
        return redirect()->route('dashboard');
    }
    
