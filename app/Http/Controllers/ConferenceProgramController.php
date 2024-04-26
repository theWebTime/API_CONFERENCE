<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceProgram;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceProgramController extends BaseController
{
    public function index(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = ConferenceProgram::where('conferences_id', $request->input('id'))->select('id', 'title', 'description')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Program Data retrieved successfully.');
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
                'title' => 'required|max:50',
                'description' => 'required|string',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'title' => $input['title'], 'description' => $input['description']]);
            // Insert or Update Conference Program in conference_programs Table
            $data = ConferenceProgram::insert($updateData);
            return $this->sendResponse([], 'Conference Program created successfully.');
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
                'conference_id' => 'required|exists:conference_programs,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            ConferenceProgram::where('id', $request->input('conference_id'))->delete();
            return $this->sendResponse([], 'Conference Program deleted successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
