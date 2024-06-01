<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\WebCommonController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', [WebCommonController::class, 'home']);
 Route::get('/conference-speakers', [WebCommonController::class, 'conferenceSpeakers'])->name('conference-speakers');
