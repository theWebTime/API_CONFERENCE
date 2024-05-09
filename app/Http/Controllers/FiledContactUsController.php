<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\Conference;
use App\Models\FiledContactUs;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class FiledContactUsController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = FiledContactUs::join('conferences', 'conferences.id', '=', 'filed_contact_us.conferences_id')->join('countries', 'countries.id', '=', 'filed_contact_us.country_id')->select('filed_contact_us.id', 'filed_contact_us.conferences_id', 'filed_contact_us.name', 'filed_contact_us.email', 'phone_number', 'countries.name as country_name', 'message', 'domain')->where(function ($query) use ($request) {
                if (auth()->user()->role == 2) {
                    $query->where('conferences.user_id', auth()->user()->id);
                }
            })->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
    public function filedContactUs(Request $request)
    {
        try {
            $domain = 'https://www.instagram.com/';
            $data = Conference::where('domain', $domain)->select('id')->first();
            $input = $request->all();
            $validator = Validator::make($input, [
                'name' => 'required|max:20',
                'email' => 'required|max:80',
                'phone_number' => 'required|max:20',
                'country_id' => 'required|exists:countries,id',
                'message' => 'required|string',
                // 'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $data->id, 'name' => $input['name'], 'email' => $input['email'], 'phone_number' => $input['phone_number'], 'country_id' => $input['country_id'], 'message' => $input['message']]);
            $contactUs = FiledContactUs::insert($updateData);
            return $this->sendResponse([], 'Thank you for submitting your Info.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
