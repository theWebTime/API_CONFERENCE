<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;
use App\Models\Conference;
use App\Models\ConferenceCommitteeMember;
use App\Models\ConferenceGallery;
use App\Models\ConferenceTestimonial;
use App\Models\ConferenceSpeaker;
use App\Models\ConferenceAboutUs;
use App\Models\ConferenceMediaPartner;
use App\Models\ConferenceProgram;
use App\Models\ConferenceFaq;
use App\Models\Country;
use App\Models\City;
use Mail;
use App\Mail\ContactUsMailConference;
use App\Models\Register;
use App\Models\FiledContactUs;
use App\Models\SubmitAbstract;
use App\Mail\SubmitAbstractMailConference;
use Illuminate\Support\Facades\Validator;

class WebCommonController extends Controller
{
    public function home(Request $request)
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $conference = Conference::where('domain', $domain)->first();
            $conferenceAboutUs = ConferenceAboutUs::where('conferences_id', $conference->id)->first();
            $conferenceCommittee = ConferenceCommitteeMember::where('conferences_id', $conference->id)->orderBy('id', 'DESC')->limit(4)->get();
            $conferenceGallery = ConferenceGallery::where('conferences_id', $conference->id)->orderBy('id', 'DESC')->limit(4)->get();
            $conferenceMediaPartner = ConferenceMediaPartner::where('conferences_id', $conference->id)->get();
            $conferenceProgram = ConferenceProgram::where('conferences_id', $conference->id)->get();
            $conferenceTestimonial = ConferenceTestimonial::where('conferences_id', $conference->id)->get();
            $conferenceSpeaker = ConferenceSpeaker::where('conferences_id', $conference->id)->orderBy('id', 'DESC')->limit(4)->get();
            return view('welcome', compact('conference', 'conferenceCommittee', 'conferenceTestimonial', 'conferenceSpeaker', 'conferenceAboutUs', 'conferenceGallery', 'conferenceMediaPartner', 'conferenceProgram'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function speaker(Request $request)
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $conference = Conference::where('domain', $domain)->first();
            $conferenceSpeaker = ConferenceSpeaker::where('conferences_id', $conference->id)->orderBy('id', 'DESC')->get();
            return view('conference-speakers', compact('conferenceSpeaker'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
    public function aboutUs()
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $conference = Conference::where('domain', $domain)->first();
            $conferenceAboutUs = ConferenceAboutUs::where('conferences_id', $conference->id)->first();
            return view('about-us', compact('conferenceAboutUs'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
    public function faq()
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $conference = Conference::where('domain', $domain)->first();
            $conferenceFaq = ConferenceFaq::where('conferences_id', $conference->id)->get();
            return view('faq', compact('conferenceFaq'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function register()
    {
        try {
            $country = Country::select('id', 'name')->get();
            return view('register', compact('country'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function store(Request $request)
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $data = Conference::where('domain', $domain)->select('id', 'email')->first();
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:20',
                'name' => 'required|max:20',
                'email' => 'required|max:80',
                'alternative_email' => 'nullable|max:80',
                'phone_number' => 'required|max:20',
                'whatsapp_number' => 'nullable|max:20',
                'institution' => 'required|max:50',
                'country_id' => 'required|exists:countries,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $data->id, 'title' => $input['title'], 'name' => $input['name'], 'email' => $input['email'], 'alternative_email' => $input['alternative_email'], 'phone_number' => $input['phone_number'], 'whatsapp_number' => $input['whatsapp_number'], 'institution' => $input['institution'], 'country_id' => $input['country_id']]);
            $register = Register::create($updateData);
            $mailData = [
                'title' => 'Mail from Register Lead',
                'data' =>  $register
            ];
            Mail::to($data->email)->send(new RegisterMailConference($mailData));
            return redirect()->route('register')->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function contactUs()
    {
        try {
            $country = Country::select('id', 'name')->get();
            return view('contact-us', compact('country'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function filedContactUs(Request $request)
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $data = Conference::where('domain', $domain)->select('id', 'email')->first();
            $input = $request->all();
            $validator = Validator::make($input, [
                'name' => 'required|max:20',
                'email' => 'required|max:80',
                'phone_number' => 'required|max:20',
                'country_id' => 'required|exists:countries,id',
                'message' => 'required|string',
                // 'conference_id' => 'required|exists:conferences,id',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $data->id, 'name' => $input['name'], 'email' => $input['email'], 'phone_number' => $input['phone_number'], 'country_id' => $input['country_id'], 'message' => $input['message']]);
            $contactUs = FiledContactUs::create($updateData);
            $mailData = [
                'title' => 'Mail from Contact Lead',
                'data' =>  $contactUs
            ];
            // dd($mailData);
            Mail::to($data->email)->send(new ContactUsMailConference($mailData));
            return redirect()->route('contact-us')->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function submitAbstractPage()
    {
        try {
            $country = Country::select('id', 'name')->get();
            return view('submit-abstract', compact('country'));
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function submitAbstract(Request $request)
    {
        try {
            if (env('APP_ENV') == 'production') {
                $domain = Request::getHost();
            } else {
                $domain = 'https://www.instagram.com/';
            }
            $data = Conference::where('domain', $domain)->select('id', 'email')->first();
            $input = $request->all();
            $validator = Validator::make($input, [
                'title' => 'required|max:20',
                'name' => 'required|max:20',
                'email' => 'required|max:80',
                'alternative_email' => 'nullable|max:80',
                'phone_number' => 'required|max:20',
                'whatsapp_number' => 'nullable|max:20',
                'city' => 'required|max:20',
                'organization' => 'required|max:20',
                'country_id' => 'required|exists:countries,id',
                'interested_in' => 'required|max:20',
                'abstract_title' => 'required|max:50',
                'message' => 'nullable|string',
                'submit_abstract_file' => 'required|mimes:pdf|max:30000',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Error.', $validator->errors());
            }
            $updateData = (['conferences_id' => $data->id, 'title' => $input['title'], 'name' => $input['name'], 'email' => $input['email'], 'alternative_email' => $input['alternative_email'], 'phone_number' => $input['phone_number'], 'whatsapp_number' => $input['whatsapp_number'], 'city' => $input['city'], 'organization' => $input['organization'], 'country_id' => $input['country_id'], 'interested_in' => $input['interested_in'], 'abstract_title' => $input['abstract_title'], 'message' => $input['message']]);
            if ($request->file('submit_abstract_file')) {
                $file = $request->file('submit_abstract_file');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('file/submitAbstractFile'), $filename);
                $updateData['submit_abstract_file'] = $filename;
            }
            /* if ($request->hasFile('submit_abstract_file')) {
                // Store the file in the public disk (storage/app/public)
                $path = $request->file('submit_abstract_file')->store('uploads', 'file/submitAbstractFile');
            } */
            $submitAbstract = SubmitAbstract::create($updateData);
            $mailData = [
                'title' => 'Mail from Submit Abstract Lead',
                'data' =>  $submitAbstract
            ];
            // dd($mailData);
            Mail::to($data->email)->send(new SubmitAbstractMailConference($mailData));
            return redirect()->route('submit-abstract')->with('success', 'Form submitted successfully!');
        } catch (Exception $e) {
            return $e;
            return $this->sendError('something went wrong!', $e);
        }
    }
}
