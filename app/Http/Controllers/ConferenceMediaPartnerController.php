<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use Illuminate\Support\Facades\DB;
use App\Models\ConferenceMediaPartner;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceMediaPartnerController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = ConferenceMediaPartner::where('conferences_id', $request->input('id'))->select('id', 'image')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Media Partner Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function store(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            //return $request;
            $input = $request->all();
            $validator = Validator::make($input, [
                'files' => 'required',
                'files.*' => 'mimes:jpg,jpeg,png,bmp,mp4|max:20000',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            foreach ($input['files'] as $data) {
                $filename = rand(11111, 99999) . strtotime("now") . '.' . $data->getClientOriginalExtension();
                $data->move(public_path('images/conferenceMediaPartner'), $filename);
                ConferenceMediaPartner::insert(
                    [
                        'conferences_id' => $request->input('conference_id'),
                        'image' => $filename,
                    ]
                );
            }
            return $this->sendResponse([], 'Conference Media Partner created successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function delete(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'conference_id' => 'required|exists:conference_media_partners,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = DB::table('conference_media_partners')->where('id', $request->input('conference_id'))->first();
            $path = public_path() . "/images/conferenceMediaPartner/" . $data->image;
            unlink($path);
            DB::table('conference_media_partners')->where('id', $request->input('conference_id'))->delete();
            return $this->sendResponse([], 'Conference Media Partner deleted successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
