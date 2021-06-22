<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function register(Request $request)
    {
        $registerData = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);
        $registerData['password'] = bcrypt($request->password);

        $user = User::create($registerData);

        $token = $user->createToken('appToken')->accessToken;
        return dd($token);
    }

    public function login(LoginRequest $request)
    {
////             Check email
//        $user = User::where('email', $request['email'])->first();
//
//        if (!$user) {
//            $response = ["message" => 'User does not exist'];
//
//            return response($response, 422);
//        }
//        // Check password
//        if (!Hash::check($request['password'], $user->password)) {
//            $response = ["message" => "Password mismatch"];
//
//            return response($response, 422);
//        }
//
//        $token = $user->createToken('appToken')->accessToken;
//
////        return dd($token);
//        return dd(auth::check());



        $credentials = request(['email', 'password']);
        if (auth()->attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('appToken')->accessToken;
            return dd(auth::check());
//           return redirect('/panel');
        }

        return respose()->json(['error' => 'UnAuthorised'], 401);

    }
}
