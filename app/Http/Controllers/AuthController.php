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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|max:20'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role == 3) {
                return $this->sendError('Unauthorized.', ['error' => 'Only Admin and Conference Owner can Login.']);
            }
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            $success['role'] =  $user->role;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorized.', []);
        }
    }

    public function profile()
    {
        try {
            $auth = auth()->user();
            if (is_null($auth)) {
                return $this->sendError('Profile not found.');
            }
            $user = User::where('id', $auth->id)->select('users.name', 'users.email')->first();
            return $this->sendResponse($user, 'Profile retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function profile_update(Request $request)
    {
        try {
            $user = auth()->user();

            $input = $request->except(['password']);
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'password' => 'required|min:6|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|max:20'
            ]);
            if ($request->password) {
                $input['password'] = bcrypt($request->password);
            }
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            User::where('id', $user->id)->update($input);
            return $this->sendResponse([], 'Profile updated successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
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
