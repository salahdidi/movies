<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class LoginController extends Controller
{


    public function login(LoginRequest $request)
    {
      
        $cerdentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (auth()->guard('api')->attempt($cerdentials)) {
        
            $token = $request->user()->createToken("api_token");
        } else {
            $resuts['data'] = null;
            $resuts['success'] = false;
            $resuts['message'] = "Verifier user or password";
            return $resuts;
        }

        $resuts['data'] = ["api_token"=>$token->plainTextToken];
        $resuts['success'] = true;
        $resuts['message'] = "ok";
        return $resuts;
    }


    public function Register(RegisterRequest $request)
    {

        $email = $request->email;
        $name = $request->name;
        $password = $request->password;

        $count = User::Where('email', '=', $email)->get();

        if ($count->count() > 0) {
            $resuts['data'] = null;
            $resuts['success'] = false;
            $resuts['message'] = "email already exists";

            return response()->json($resuts);
        }
        $token=Str::random(60);
        $user = User::create(
            [
                "email" =>  $email,
                "name" => $name,
                "password" => Hash::make($password),
                "api_token" => $token
            ]
        );

        //Auth::login($user);
        $resuts['data'] = ["api_token"=>$token];
        $resuts['success'] = true;
        $resuts['message'] = "account registred ";

        return response()->json($resuts);
    }
}
