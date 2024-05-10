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
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
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

    public function stateList($id)
    {
        try {
            $data = State::where('country_id', $id)->select('id', 'name')->get();
            return $this->sendResponse($data, 'State Names retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function cityList($id)
    {
        try {
            $data = City::where('state_id', $id)->select('id', 'name')->get();
            return $this->sendResponse($data, 'City Names retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function conferenceList(Request $request)
    {
        try {
            $data = Conference::join('countries', 'countries.id', '=', 'conferences.country_id')->join('states', 'states.id', '=', 'conferences.state_id')->join('cities', 'cities.id', '=', 'conferences.city_id')->select('conferences.id', 'title', 'date', 'logo', 'domain', 'contact_number1', 'address', 'email', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name');
            if (!$request->total) {
                $data = $data->orderBy('id', 'DESC')->get();
            } else {
                $data = $data->limit(6)->orderBy('id', 'DESC')->get();
            }
            return $this->sendResponse($data, 'Conference retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
    public function getConference(Request $request)
    {
        try {
            $previousDate = Conference::join('countries', 'countries.id', '=', 'conferences.country_id')->join('states', 'states.id', '=', 'conferences.state_id')->join('cities', 'cities.id', '=', 'conferences.city_id')->select('conferences.id', 'title', 'date', 'logo', 'domain', 'contact_number1', 'address', 'email', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name')->where('date', '<', Carbon::now()->toDateTimeString())->get();
            $upcomingDate = Conference::join('countries', 'countries.id', '=', 'conferences.country_id')->join('states', 'states.id', '=', 'conferences.state_id')->join('cities', 'cities.id', '=', 'conferences.country_id')->select('conferences.id', 'title', 'date', 'logo', 'domain', 'contact_number1', 'address', 'email', 'countries.name as country_name', 'states.name as state_name', 'cities.name as city_name')->where('date', '>', Carbon::now()->toDateTimeString())->get();
            $data = $request->date == 'upcomingDate' ? $upcomingDate : $previousDate;
            return $this->sendResponse($data, 'Conference Data retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function userList()
    {
        try {
            $data = User::select('id', 'name')->get();
            return $this->sendResponse($data, 'Name retrieved successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
