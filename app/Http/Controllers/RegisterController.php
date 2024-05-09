<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\Conference;
use App\Models\Register;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class RegisterController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = Register::join('conferences', 'conferences.id', '=', 'registers.conferences_id')->join('countries', 'countries.id', '=', 'registers.country_id')->select('registers.id', 'registers.conferences_id', 'registers.name', 'registers.title', 'registers.email', 'alternative_email', 'registers.phone_number', 'registers.whatsapp_number', 'registers.institution', 'countries.name as country_name', 'domain')->where(function ($query) use ($request) {

                if (auth()->user()->role == 2) {
                    $query->where('conferences.user_id', auth()->user()->id);
                }
            })->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function store(Request $request)
    {
        try {
            $domain = 'https://www.instagram.com/';
            $data = Conference::where('domain', $domain)->select('id')->first();
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:20',
                'name' => 'required|max:20',
                'email' => 'required|max:80',
                'alternative_email' => 'nullable|max:80',
                'phone_number' => 'required|max:20',
                'whatsapp_number' => 'nullable|max:20',
                'institution' => 'required|max:50',
                'country_id' => 'required|exists:countries,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $data->id, 'title' => $input['title'], 'name' => $input['name'], 'email' => $input['email'], 'alternative_email' => $input['alternative_email'], 'phone_number' => $input['phone_number'], 'whatsapp_number' => $input['whatsapp_number'], 'institution' => $input['institution'], 'country_id' => $input['country_id']]);
            $register = Register::insert($updateData);
            return $this->sendResponse([], 'Thank you for submitting your Info.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
