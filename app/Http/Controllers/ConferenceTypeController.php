<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceType;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceTypeController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = ConferenceType::select('id', 'title', 'status')->where(function ($query) use ($request) {
                if ($request->search != null) {
                    $query->where('title', 'like', '%' . $request->search . '%');
                }
            })->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Type Data retrieved successfully.');
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
                'title' => 'required|max:50',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['title' => $input['title']]);
            // Insert or Update Conference Type in conference_types Table
            $data = ConferenceType::insert($updateData);
            return $this->sendResponse($data, 'Conference Type created successfully.');
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
                'conference_type_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = ConferenceType::where('id', $request->input('conference_type_id'))->select('id', 'title', 'status')->first();
            if (is_null($data)) {
                return $this->sendError('Data not found.');
            }
            return $this->sendResponse($data, 'Conference Type retrieved successfully.');
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
                'title' => 'required|max:50',
                'status' => 'required|in:0,1',
                'conference_type_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['title' => $input['title'], 'status' => $input['status']]);
            // Insert or Update Conference Type in conference_types Table
            ConferenceType::where('id', $request->input('conference_type_id'))->update($updateData);
            return $this->sendResponse([], 'Conference Type updated successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
