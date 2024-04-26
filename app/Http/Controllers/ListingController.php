<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\ConferenceTag;
use App\Models\ConferenceType;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Conference;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ListingController extends BaseController
{
    public function conferenceTagList()
    {
        try {
            $data = ConferenceTag::select('id', 'title')->get();
            return $this->sendResponse($data, 'Conference Tags retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function conferenceTypeList()
    {
        try {
            $data = ConferenceType::select('id', 'title')->get();
            return $this->sendResponse($data, 'Conference Types retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function countryList()
    {
        try {
            $data = Country::select('id', 'name')->get();
            return $this->sendResponse($data, 'Country Names retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function stateList(Request $request)
    {
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'id' => 'required|exists:countries,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = State::where('country_id', $request->input('id'))->select('id', 'name')->get();
            return $this->sendResponse($data, 'State Names retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function cityList(Request $request)
    {
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'id' => 'required|exists:states,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = City::where('state_id', $request->input('id'))->select('id', 'name')->get();
            return $this->sendResponse($data, 'City Names retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function conferenceList()
    {
        try {
            $data = Conference::select('id', 'title')->get();
            return $this->sendResponse($data, 'Conference retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
