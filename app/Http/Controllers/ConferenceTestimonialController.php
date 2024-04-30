<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use Illuminate\Support\Facades\DB;
use App\Models\ConferenceTestimonial;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BaseController as BaseController;

class ConferenceTestimonialController extends BaseController
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
            $data = ConferenceTestimonial::where('conferences_id', $request->input('id'))->select('id', 'image', 'name', 'designation', 'review')->orderBy('id', 'DESC')->paginate($request->itemsPerPage ?? 10);
            return $this->sendResponse($data, 'Conference Testimonial Data retrieved successfully.');
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
                'image' => 'mimes:jpg,jpeg,png,bmp,mp4|max:20000',
                'conference_id' => 'required|exists:conferences,id',
                'name' => 'required|max:20',
                'designation' => 'required|max:20',
                'review' => 'required|max:200',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $request->input('conference_id'), 'name' => $input['name'], 'designation' => $input['designation'], 'review' => $input['review'],]);
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('images/conferenceTestimonial'), $filename);
                $updateData['image'] = $filename;
            }
            ConferenceTestimonial::insert($updateData);
            return $this->sendResponse([], 'Conference Testimonial created successfully.');
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
                'conference_id' => 'required|exists:conference_testimonials,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $data = DB::table('conference_testimonials')->where('id', $request->input('conference_id'))->first();
            $path = public_path() . "/images/conferenceTestimonial/" . $data->image;
            unlink($path);
            DB::table('conference_testimonials')->where('id', $request->input('conference_id'))->delete();
            return $this->sendResponse([], 'Conference Testimonial deleted successfully.');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
