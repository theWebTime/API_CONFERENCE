<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceAboutUs;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceAboutUsController extends BaseController
{
    public function show(Request $request)
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
            $data = ConferenceAboutUs::where('conferences_id', $request->input('id'))->select('image', 'title', 'description', 'international_speaker')->first();
            if (is_null($data)) {
                return $this->sendError('Conference About Us not found.');
            }
            return $this->sendResponse($data, 'Conference About Us Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function updateOrCreate(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'title' => 'required|string|max:100',
                'description' => 'required|string',
                'international_speaker' => 'nullable',
                'conference_id' => 'required|exists:conferences,id',
                'conf_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'title' => $input['title'], 'description' => $input['description'], 'international_speaker' => $input['international_speaker']]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('images/conferenceAboutUs'), $filename);
                $updateData['image'] = $filename;
            }
            // Insert or Update Conference About Us in conference_about_us Table
            $data = ConferenceAboutUs::where('conferences_id', $request->input('conference_id'))->updateOrInsert(
                ['id' => 1],
                $updateData
            );
            return $this->sendResponse([], 'Conference About Us created successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
