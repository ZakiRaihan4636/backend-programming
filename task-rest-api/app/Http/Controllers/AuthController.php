<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use app\Models\User;

class AuthController extends Controller
{
    public function regiter(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        $user = User::create($input);

        if ($user) {
            $data  = [
                'message' => 'User is created succsecfuly'
            ];

            return response()->json($data, 201);
        } else {
            $data = [
                'message' => 'User is created successfuly'
            ];

            return response()->json($data);
        }
    }

    public function login(Request $request)
    {
        $input = [
            'email' => $request->email,
            'password' => $request->password
        ];


        $user = User::where('email', $input['email'])->first();

        $token = $user->createToken('auth_token');

        $isLogin = $input['email'] == $user->email && Hash::check($input['password'], $user->password);

        if ($isLogin) {
            $data = [
                'message' => 'login successfuly',
                'token' => $token->plainTextToken
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'login failed'
            ];

            return response()->json($data, 404);
        }
    }
}
