<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use Illuminate\Support\Facades\DB;
use App\Models\ConferenceSchedule;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceScheduleController extends BaseController
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
            $data = ConferenceSchedule::where('conferences_id', $request->input('id'))->select('id', 'title', 'date')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Schedule Data retrieved successfully.');
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
                'title' => 'required|max:20',
                'date' => 'required|max:20',
                'data' => 'required|array',
                'data.*.title' => 'required|string',
                'data.*.description' => 'required|string',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $jsonData = json_encode($input['data']);
            $updateData = (['conferences_id' => $request->input('conference_id'), 'title' => $input['title'], 'date' => $input['date'], 'data' => $jsonData]);
            ConferenceSchedule::insert($updateData);
            return $this->sendResponse([], 'Conference Schedule created successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function show(Request $request)
    {
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }

            // Retrieve the conference schedule data
            $confScheduleData = ConferenceSchedule::where('conferences_id', $request->input('id'))
                ->select('id', 'title', 'date', 'data')
                ->first();

            // Check if data exists
            if (is_null($confScheduleData)) {
                return $this->sendError('Data not found.');
            }

            // Decode the JSON data
            $decodedData = json_decode($confScheduleData->data, true);

            // Prepare the response data
            $data = [
                'id' => $confScheduleData->id,
                'title' => $confScheduleData->title,
                'date' => $confScheduleData->date,
                'data' => $decodedData,
            ];

            return $this->sendResponse($data, 'Conference Schedule retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('Something went wrong!', $e->getMessage());
        }
    }


    public function update(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:20',
                'date' => 'required|max:20',
                'data' => 'required|array',
                'data.*.title' => 'required|string',
                'data.*.description' => 'required|string',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $jsonData = json_encode($input['data']);
            $conferenceSchedule = ConferenceSchedule::where('conferences_id', $request->input('conference_id'))->first();
            if (is_null($conferenceSchedule)) {
                return $this->sendError('Data not found.');
            }
            $conferenceSchedule->update(['title' => $input['title'], 'date' => $input['date'], 'data' => $jsonData]);
            return $this->sendResponse([], 'Conference Schedule created successfully.');
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
                'conference_id' => 'required|exists:conference_schedules,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = DB::table('conference_schedules')->where('id', $request->input('conference_id'))->first();
            $path = public_path() . "/images/conferenceSchedule/" . $data->data;
            unlink($path);
            DB::table('conference_schedules')->where('id', $request->input('conference_id'))->delete();
            return $this->sendResponse([], 'Conference Schedule deleted successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
