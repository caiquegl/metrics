<?php

namespace App\Http\Controllers;

use App\Models\Living;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLivingController extends Controller
{
    public function login(Request $request)
    {
        $isAuth = Auth::guard('livings')->attempt($request->only(['email', 'password']));

        if (!$isAuth) {
            return response()->json([
                'message' => 'E-mail ou senha invalído',
                'token' => null,
                'status' => 401
            ], 401);
        }

        $token = Living::query()
            ->where('email', $request->email)
            ->first()
            ->createToken('living_app');

        return response()->json([
            'message' => 'Token gerado com sucesso',
            'token' => $token->plainTextToken,
            'status' => 200
        ], 200);
    }
}
