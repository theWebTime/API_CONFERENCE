<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceTag;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceTagController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = ConferenceTag::select('id', 'title', 'status')->where(function ($query) use ($request) {
                if ($request->search != null) {
                    $query->where('title', 'like', '%' . $request->search . '%');
                }
            })->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Tag Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function store(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:50|unique:conference_tags',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['title' => $input['title']]);
            // Insert or Update Conference Tag in conference_tags Table
            $data = ConferenceTag::insert($updateData);
            return $this->sendResponse($data, 'Conference Tag created successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function show(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'conference_tag_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = ConferenceTag::where('id', $request->input('conference_tag_id'))->select('id', 'title', 'status')->first();
            if (is_null($data)) {
                return $this->sendError('Data not found.');
            }
            return $this->sendResponse($data, 'Conference Tag retrieved successfully.');
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
                'title' => 'required|max:50|unique:conference_tags',
                'status' => 'required|in:0,1',
                'conference_tag_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['title' => $input['title'], 'status' => $input['status']]);
            // Insert or Update Conference Tag in conference_tags Table
            ConferenceTag::where('id', $request->input('conference_tag_id'))->update($updateData);
            return $this->sendResponse([], 'Conference Tag updated successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
