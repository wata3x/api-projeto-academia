<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AutenticacaoController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        try {
            $token = JWTAuth::attempt($credenciais);
        } catch (JWTException $ex) {
            return response()->json(['erro' => 'nao foi possivel criar o token'], 500);
        }

        if (!$token) {
            return response()->json(['erro' => 'credenciais inválidas'], 401);
        }

        return response()->json(compact('token'));
    }
}
