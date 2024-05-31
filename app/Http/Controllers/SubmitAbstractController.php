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

    public function store(Request $request)
    {
        try {
            $domain = 'https://www.instagram.com/';
            $data = Conference::where('domain', $domain)->select('id', 'email')->first();
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:20',
                'name' => 'required|max:20',
                'email' => 'required|max:80',
                'alternative_email' => 'nullable|max:80',
                'phone_number' => 'required|max:20',
                'whatsapp_number' => 'nullable|max:20',
                'city' => 'required|max:20',
                'organization' => 'required|max:20',
                'country_id' => 'required|exists:countries,id',
                'interested_in' => 'required|max:20',
                'abstract_title' => 'required|max:50',
                'message' => 'nullable|string',
                'submit_abstract_file' => 'required|mimes:pdf|max:30000',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $data->id, 'title' => $input['title'], 'name' => $input['name'], 'email' => $input['email'], 'alternative_email' => $input['alternative_email'], 'phone_number' => $input['phone_number'], 'whatsapp_number' => $input['whatsapp_number'], 'city' => $input['city'], 'organization' => $input['organization'], 'country_id' => $input['country_id'], 'interested_in' => $input['interested_in'], 'abstract_title' => $input['abstract_title'], 'message' => $input['message']]);
            if ($request->file('submit_abstract_file')) {
                $file = $request->file('submit_abstract_file');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('file/submitAbstractFile'), $filename);
                $updateData['submit_abstract_file'] = $filename;
            }
            $submitAbstract = SubmitAbstract::create($updateData);
            $mailData = [
                'title' => 'Mail from Submit Abstract Lead',
                'data' =>  $submitAbstract
            ];
            // dd($mailData);
            Mail::to($data->email)->send(new SubmitAbstractMailConference($mailData));
            return $this->sendResponse([], 'Thank you for submitting your Info.');
        } catch (Exception $e) {
            return $e;
            return $this->sendError('something went wrong!', $e);
        }
    }
}
