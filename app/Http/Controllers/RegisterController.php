<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\Conference;
use App\Models\Register;
use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\RegisterMailConference;
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
}
