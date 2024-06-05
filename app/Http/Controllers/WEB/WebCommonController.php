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
}
