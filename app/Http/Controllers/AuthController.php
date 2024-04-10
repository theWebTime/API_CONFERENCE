<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use \Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Mail;
use App\Mail\RecoveryOtp;

class AuthController extends BaseController
{
 
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            $success['role'] =  $user->role;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
        }
    }



    public function logout()
    {
        try {
            if (Auth::user()) {
                $user = Auth::user()->token();
                $user->revoke();
                return $this->sendResponse([], 'User logout successfully.');
            } else {
                return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
            }
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
