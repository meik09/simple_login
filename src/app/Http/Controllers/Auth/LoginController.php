<?php

namespace Simple\Login\App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Simple\Login\App\Http\Requests\LoginRequest;
use Simple\Login\App\Http\Resources\LoginResource;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->getData();
        $token = auth()->attempt($data);
        if (!$token) return $this->response(
            config('constants.code.login_error'),
            'message.loginFailure',
            null,
            [],
            401
        );

        $loginData = $this->createNewToken($token);

        return $this->response(
            '',
            'message.loginSuccessful',
            new LoginResource($loginData),
            []);
    }

    protected function createNewToken(string $token): array
    {
        return [
            'access_token' => $token,
            'expires_in' => auth('api')->factory()->getTTL(),
            'user' => auth()->user()
        ];
    }

    protected function response($code, $message, $data, $error, int $statusCode = 200)
    {
        $responseData = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'errors' => $error
        ];

        return response()->json($responseData, $statusCode);
    }
}
