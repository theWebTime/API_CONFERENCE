<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;

class WebCommonController extends Controller
{
    public function home(Request $request)
    {
        try {
            return view('welcome');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }

    public function speaker(Request $request)
    {
        try {
            return view('conference-speakers');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
