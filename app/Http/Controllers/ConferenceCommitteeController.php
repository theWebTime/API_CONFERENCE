<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use Illuminate\Support\Facades\DB;
use App\Models\ConferenceCommitteeMember;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceCommitteeController extends BaseController
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
            $data = ConferenceCommitteeMember::where('conferences_id', $request->input('id'))->select('id', 'image', 'name', 'designation', 'facebook_link', 'x_Link', 'linkedin_link')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Committee Member Data retrieved successfully.');
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
                'image' => 'required|mimes:jpg,jpeg,png,bmp,mp4|max:20000',
                'conference_id' => 'required|exists:conferences,id',
                'name' => 'required|max:20',
                'designation' => 'required|max:20',
                'facebook_link' => 'nullable|max:300|url',
                'x_link' => 'nullable|max:300|url',
                'linkedin_link' => 'nullable|max:300|url',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'name' => $input['name'], 'designation' => $input['designation'], 'facebook_link' => $input['facebook_link'], 'x_link' => $input['x_link'], 'linkedin_link' => $input['linkedin_link']]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('images/conferenceCommitteeMember'), $filename);
                $updateData['image'] = $filename;
            }
            ConferenceCommitteeMember::insert($updateData);
            return $this->sendResponse([], 'Conference Committee Member created successfully.');
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
                'conference_id' => 'required|exists:conference_committee_members,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = DB::table('conference_committee_members')->where('id', $request->input('conference_id'))->first();
            $path = public_path() . "/images/conferenceCommitteeMember/" . $data->image;
            unlink($path);
            DB::table('conference_committee_members')->where('id', $request->input('conference_id'))->delete();
            return $this->sendResponse([], 'Conference Committee Member deleted successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
