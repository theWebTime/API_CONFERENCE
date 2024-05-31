<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Exception;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        try {
            return view('welcome');
        } catch (Exception $e) {
            return $this->sendError('something went wrong!', $e);
        }
    }
}
