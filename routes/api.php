<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// LOGIN
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'senha' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->senha, $user->senha)) {
        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
    ]);
});

// USER LOGADO
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json($request->user());
});

// LOGOUT
Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();

    return response()->json(['message' => 'Logout realizado com sucesso.']);
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('/test', function(){
//     return "teste";
// });

Route::post('/register', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'nome' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios,email',
        'senha' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors(),
        ], 422);
    }

    $user = User::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'senha' => Hash::make($request->senha),
    ]);

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'message' => 'Usuário registrado com sucesso!',
        'access_token' => $token,
        'token_type' => 'Bearer',
    ], 201);
});

