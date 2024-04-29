<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceController extends BaseController
{
    public function index(Request $request)
    {
        try {
            $data = Conference::select('id', 'domain', 'title')->where(function ($query) use ($request) {
                if ($request->search != null) {
                    $query->where('title', 'like', '%' . $request->search . '%');
                }
                if (auth()->user()->role == 2) {
                    $query->where('user_id', auth()->user()->id);
                }
            })->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Data retrieved successfully.');
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
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'domain' => 'required|max:50|url|unique:conferences',
                'title' => 'required|string|max:50|unique:conferences',
                'date' => 'required|max:30',
                'address' => 'required|string',
                'iframe' => 'nullable|string',
                'contact_number1' => 'required|max:20',
                'contact_number2' => 'required|max:20',
                'wp_number' => 'required|max:20',
                'email' => 'required|max:80|unique:conferences',
                'password' => 'required|min:6|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|max:20',
                'abstract_file_sample' => 'nullable|mimes:pdf|max:30000',
                'conference_tags_id' => 'required|exists:conference_tags,id',
                'conference_types_id' => 'required|exists:conference_types,id',
                'country_id' => 'required|exists:countries,id',
                'state_id' => 'required|exists:states,id',
                'city_id' => 'required|exists:cities,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $user = User::create(['name' => $input['title'], 'email' => $input['email'], 'password' => bcrypt($input['password']), 'role' => 2]);
            $updateData = (['user_id' => $user->id, 'domain' => $input['domain'], 'title' => $input['title'], 'date' => $input['date'], 'address' => $input['address'], 'iframe' => $input['iframe'], 'contact_number1' => $input['contact_number1'], 'contact_number2' => $input['contact_number2'], 'wp_number' => $input['wp_number'], 'email' => $input['email'], 'abstract_file_sample' => $input['abstract_file_sample'], 'conference_tags_id' => $input['conference_tags_id'], 'conference_types_id' => $input['conference_types_id'], 'country_id' => $input['country_id'], 'state_id' => $input['state_id'], 'city_id' => $input['city_id']]);
            if ($request->file('logo')) {
                $file = $request->file('logo');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('images/conference'), $filename);
                $updateData['logo'] = $filename;
            }
            if ($request->file('abstract_file_sample')) {
                $file = $request->file('abstract_file_sample');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('file/abstractFileSample'), $filename);
                $updateData['abstract_file_sample'] = $filename;
            }
            // Insert Conference in conferences Table
            $data = Conference::insert($updateData);
            return $this->sendResponse($data, 'Conference created successfully.');
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
                'conference_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = Conference::where('id', $request->input('conference_id'))->select('id', 'user_id', 'domain', 'title', 'date', 'address', 'iframe', 'contact_number1', 'contact_number2', 'wp_number', 'email', 'logo', 'abstract_file_sample', 'status', 'conference_tags_id', 'conference_types_id', 'country_id', 'state_id', 'city_id')->first();
            if (is_null($data)) {
                return $this->sendError('Data not found.');
            }
            return $this->sendResponse($data, 'Conference retrieved successfully.');
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
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'user_id' => 'required|exists:users,id',
                'domain' => 'required|max:50|url',
                'title' => 'required|string|max:50',
                'date' => 'required|max:30',
                'address' => 'required|string',
                'iframe' => 'nullable|string',
                'contact_number1' => 'required|max:20',
                'contact_number2' => 'required|max:20',
                'wp_number' => 'required|max:20',
                'email' => 'required|max:80',
                'abstract_file_sample' => 'nullable|mimes:pdf|max:30000',
                'conference_tags_id' => 'required|exists:conference_tags,id',
                'conference_types_id' => 'required|exists:conference_types,id',
                'country_id' => 'required|exists:countries,id',
                'state_id' => 'required|exists:states,id',
                'city_id' => 'required|exists:cities,id',
                'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['user_id' => $input['user_id'], 'domain' => $input['domain'], 'title' => $input['title'], 'date' => $input['date'], 'address' => $input['address'], 'iframe' => $input['iframe'], 'contact_number1' => $input['contact_number1'], 'contact_number2' => $input['contact_number2'], 'wp_number' => $input['wp_number'], 'email' => $input['email'], 'conference_tags_id' => $input['conference_tags_id'], 'conference_types_id' => $input['conference_types_id'], 'country_id' => $input['country_id'], 'state_id' => $input['state_id'], 'city_id' => $input['city_id']]);
            if ($request->file('logo')) {
                $file = $request->file('logo');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('images/conference'), $filename);
                $updateData['logo'] = $filename;
            }
            if ($request->file('abstract_file_sample')) {
                $file = $request->file('abstract_file_sample');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('file/abstractFileSample'), $filename);
                $updateData['abstract_file_sample'] = $filename;
            }
            // Update Conference in conferences Table
            Conference::where('id', $request->input('conference_id'))->update($updateData);
            return $this->sendResponse([], 'Conference updated successfully.');
        } catch (Exception $e) {
            return $e;
            return $this->sendError('something went wrong!', $e);
        }
    }
}
