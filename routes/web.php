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
Route::get('/scientific-committee', [WebCommonController::class, 'conferenceSpeakers'])->name('scientific-committee');
Route::get('/speaker', [WebCommonController::class, 'speaker'])->name('speaker');
Route::get('/program', [WebCommonController::class, 'program'])->name('program');
Route::get('/venue-detail', [WebCommonController::class, 'venueDetail'])->name('venue-detail');
Route::get('/guideline', [WebCommonController::class, 'guideline'])->name('guideline');
Route::get('/faq', [WebCommonController::class, 'faq'])->name('faq');
Route::get('/conference-brochure', [WebCommonController::class, 'conferenceBrochure'])->name('conference-brochure');
Route::get('/about-us', [WebCommonController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [WebCommonController::class, 'contactUs'])->name('contact-us');
Route::get('/submit-abstract-page', [WebCommonController::class, 'submitAbstractPage'])->name('submit-abstract-page');
Route::get('/register', [WebCommonController::class, 'register'])->name('register');
