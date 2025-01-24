<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequests;
use App\Trait\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    use ApiResponder;

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:users,email',
                'password' => 'required|min:6'
            ]);

            if ($validator->fails()) {
                return $this->error("Invalida validation", 400, $validator->errors());
            }

            $credentials = $request->only('email', 'password');
            if (!$token = JWTAuth::attempt($credentials)) {
                return $this->error('Unauthorized', null, 401);
            }
            return $this->respondWithToken($token);
        } catch (\Exception $e) {
            return $this->error("Internal server error", 500, $e->getMessage());
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => JWTAuth::factory()->getTTL() * 60
        ]);
    }
}
