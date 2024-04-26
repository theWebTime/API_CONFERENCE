<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceOtherInformation;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceOtherInformationController extends BaseController
{
    public function show(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $data = ConferenceOtherInformation::select('venue_description', 'guidelines_description', 'brochures')->first();
            if (is_null($data)) {
                return $this->sendError('Conference Other Information not found.');
            }
            return $this->sendResponse($data, 'Conference Other Information Data retrieved successfully.');
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
                'venue_description' => 'required|string',
                'guidelines_description' => 'required|string',
                'brochures' => 'nullable|mimes:pdf|max:30000',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'venue_description' => $input['venue_description'], 'guidelines_description' => $input['guidelines_description']]);
            if ($request->file('brochures')) {
                $file = $request->file('brochures');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('file/abstractFileSample'), $filename);
                $updateData['brochures'] = $filename;
            }
            // Insert or Update Conference Other Information in conference_other_information Table
            $data = ConferenceOtherInformation::updateOrInsert($updateData);
            return $this->sendResponse([], 'Conference Other Information created successfully.');
        } catch (Exception $e) {
            return $e;
            return $this->sendError('something went wrong!', $e);
        }
    }
}
