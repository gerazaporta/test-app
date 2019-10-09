<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    //
    public function register(UserRegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return response()->json($user);
    }

    public function login(UserLoginRequest $request)
    {
        if( Auth::attempt(['email'=>$request->email, 'password'=>$request->password]) ) {
            /*** @var User $user */
            $user = Auth::user();

            $token = $user->createToken($user->email.'-'.now());
            return response()->json([
                'token' => $token->accessToken
            ]);
        }

        return response()->json([
            'token' => '',
            'message' => 'Invalid Credentials!!'
        ], 403);
    }
}
