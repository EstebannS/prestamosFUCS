<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Sanctum;

class TokenController extends Controller
{
    public function generateToken(User $user)
    {
        $token = $user->createToken('token-name'); //personalizar el nombre del token

        //Actualizar el campo 'remember token' en la tabla 'users'
        $user->remember_token = $token->plainTextToken;
        $user->save();

        //mostrar mensaje de extio
        return redirect()->route('users.show', $user->id)->with('success', 'Token generado y guardado con éxito.');
    }
}
