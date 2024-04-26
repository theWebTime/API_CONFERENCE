<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceImportantDate;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceImportantDateController extends BaseController
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
            $data = ConferenceImportantDate::where('conferences_id', $request->input('id'))->select('id', 'category', 'title', 'date')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Important Date Data retrieved successfully.');
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
                'category' => 'required|in:1,2,3',
                'title' => 'required|max:20',
                'date' => 'required|max:20',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'category' => $input['category'], 'title' => $input['title'], 'date' => $input['date']]);
            // Insert or Update Conference Important Date in conference_important_dates Table
            $data = ConferenceImportantDate::insert($updateData);
            return $this->sendResponse([], 'Conference Important Date created successfully.');
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
                'conference_id' => 'required|exists:conference_important_dates,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            ConferenceImportantDate::where('id', $request->input('conference_id'))->delete();
            return $this->sendResponse([], 'Conference Important Date deleted successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
