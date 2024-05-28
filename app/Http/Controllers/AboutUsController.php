<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\AboutUs;
use App\Models\Conference;
use App\Models\ConferenceTag;
use App\Models\ConferenceType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class AboutUsController extends BaseController
{
    public function updateOrCreateAboutUs(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:200',
                'description' => 'required|string',
                'our_mission' => 'required|string',
                'our_vision' => 'required|string',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['title' => $input['title'], 'description' => $input['description'], 'our_mission' => $input['our_mission'], 'our_vision' => $input['our_vision']]);
            // Insert or Update About Us in about_us Table
            $data = AboutUs::updateOrInsert(
                ['id' => 1],
                $updateData
            );
            return $this->sendResponse([], 'About Us Data Updated successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function aboutUsShow()
    {
        try {
            $data = AboutUs::select('title',  'description', 'our_mission', 'our_vision')->first();
            if (is_null($data)) {
                return $this->sendError('About Us Data not found.');
            }
            return $this->sendResponse($data, 'About Us Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function count(Request $request)
    {
        //Using Try & Catch For Error Handling
        try {
            $data1 = Conference::join('countries', 'countries.id', '=', 'conferences.country_id')->join('states', 'states.id', '=', 'conferences.state_id')->join('cities', 'cities.id', '=', 'conferences.city_id')->select('conferences.id', 'title', 'date', 'logo', 'domain', 'contact_number1', 'address', 'email', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name')->where('date', '<', Carbon::now()->toDateTimeString())->count();
            $data2 = Conference::join('countries', 'countries.id', '=', 'conferences.country_id')->join('states', 'states.id', '=', 'conferences.state_id')->join('cities', 'cities.id', '=', 'conferences.country_id')->select('conferences.id', 'title', 'date', 'logo', 'domain', 'contact_number1', 'address', 'email', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name')->where('date', '>', Carbon::now()->toDateTimeString())->count();
            $data3 = ConferenceTag::count();
            $data4 = ConferenceType::count();
            $data = ['previousConference' => $data1, 'upcomingConference' => $data2, 'conferenceTag' => $data3, 'conferenceType' => $data4];
            return $this->sendResponse($data, 'Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
