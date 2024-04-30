<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferencePlan;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferencePlanController extends BaseController
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
            $data = ConferencePlan::where('conferences_id', $request->input('id'))->select('id', 'amount', 'title', 'status')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Plan Data retrieved successfully.');
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
                'amount' => 'required',
                'title' => 'required|max:50',
                'description' => 'required|string',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'amount' => $input['amount'], 'title' => $input['title'], 'description' => $input['description']]);
            // Insert or Update Conference Plan in conference_plans Table
            $data = ConferencePlan::insert($updateData);
            return $this->sendResponse([], 'Conference Plan created successfully.');
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
                'conference_plan_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = ConferencePlan::where('id', $request->input('conference_plan_id'))->select('id', 'amount', 'title', 'description', 'status')->first();
            if (is_null($data)) {
                return $this->sendError('Data not found.');
            }
            return $this->sendResponse($data, 'Conference Plan retrieved successfully.');
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
                'amount' => 'required',
                'title' => 'required|max:50',
                'description' => 'required|string',
                'status' => 'required|in:0,1',
                'conference_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['amount' => $input['amount'], 'title' => $input['title'], 'description' => $input['description'], 'status' => $input['status']]);
            // Insert or Update Conference Plan in conference_plans Table
            ConferencePlan::where('id', $request->input('conference_id'))->update($updateData);
            return $this->sendResponse([], 'Conference Plan updated successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
