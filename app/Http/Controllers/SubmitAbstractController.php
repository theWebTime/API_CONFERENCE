<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\Conference;
use App\Models\SubmitAbstract;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\SubmitAbstractMailConference;
use App\Http\Controllers\BaseController as BaseController;

class SubmitAbstractController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = SubmitAbstract::join('conferences', 'conferences.id', '=', 'submit_abstracts.conferences_id')->join('countries', 'countries.id', '=', 'submit_abstracts.country_id')->select('submit_abstracts.id', 'submit_abstracts.conferences_id', 'submit_abstracts.name as submit_abstract_name', 'submit_abstracts.title', 'submit_abstracts.email', 'alternative_email', 'phone_number', 'whatsapp_number', 'city', 'organization', 'countries.name as country_name', 'interested_in', 'abstract_title', 'message', 'submit_abstract_file', 'conferences.domain')->where(function ($query) use ($request) {

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
