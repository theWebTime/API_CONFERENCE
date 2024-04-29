<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class UserController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = User::where('role', '!=', 1)->select('id', 'name', 'email', 'role', 'status')->where(function ($query) use ($request) {
                if ($request->search != null) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                }
            })->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'User Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    /*  public function store(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'name' => 'required|max:50',
                'email' => 'required|max:50',
                'password' => 'required|min:6|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|max:20',
                'role' => 'required|in:1,2',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['name' => $input['name'], 'email' => $input['email'], 'password' => bcrypt($input['password']), 'role' => $input['role']]);
            User::create($updateData);
            return $this->sendResponse([], 'User created successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    } */

    public function show(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'id' => 'required|exists:users,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = User::where('id', $request->input('id'))->select('id', 'name', 'email', 'status')->first();
            return $this->sendResponse($data, 'User Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function update(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'name' => 'required|max:50',
                'email' => 'required|max:50',
                'status' => 'required|in:0,1',
                'user_id' => 'required|exists:users,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['name' => $input['name'], 'email' => $input['email'], 'status' => $input['status']]);
            User::where('id', $request->input('user_id'))->update($updateData);
            return $this->sendResponse([], 'User updated successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
