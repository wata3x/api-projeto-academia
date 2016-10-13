<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AutenticacaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    public function loginView()
    {
        return view('autenticacao.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'max:150', 'email'],
            'password' => ['required', 'min:6', 'max:30']
        ]);
        $credenciais = $request->only(['email', 'password']);

        if (!Auth::attempt($credenciais)) {
            return redirect()->back()
                ->with('Falhou', 'Credenciais inválidas')
                ->withInput();
        }
        return redirect('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
