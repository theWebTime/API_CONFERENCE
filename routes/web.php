<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\WebCommonController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FiledContactUsController;
use App\Http\Controllers\SubmitAbstractController;


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

Route::get('/', [WebCommonController::class, 'home'])->name('home');
Route::get('/scientific-committee', [WebCommonController::class, 'conferenceSpeakers'])->name('scientific-committee');
Route::get('/speaker', [WebCommonController::class, 'speaker'])->name('speaker');
Route::get('/program', [WebCommonController::class, 'program'])->name('program');
Route::get('/venue-detail', [WebCommonController::class, 'venueDetail'])->name('venue-detail');
Route::get('/guideline', [WebCommonController::class, 'guideline'])->name('guideline');
Route::get('/faq', [WebCommonController::class, 'faq'])->name('faq');
Route::get('/conference-brochure', [WebCommonController::class, 'conferenceBrochure'])->name('conference-brochure');
Route::get('/committee-member', [WebCommonController::class, 'committeeMember'])->name('committee-member');
Route::get('/gallery', [WebCommonController::class, 'gallery'])->name('gallery');
Route::get('/about-us', [WebCommonController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [WebCommonController::class, 'contactUs'])->name('contact-us');
Route::get('/submit-abstract', [WebCommonController::class, 'submitAbstractPage'])->name('submit-abstract');
Route::get('/register', [WebCommonController::class, 'register'])->name('register');

// Register Route
Route::post('/register-data', [WebCommonController::class, 'store'])->name('register.data');

// Filed Contact Us Route 
Route::post('/filed-contact-us', [WebCommonController::class, 'filedContactUs'])->name('contact.data');

// Submit Abstract Rute
Route::post('/submit-abstract', [WebCommonController::class, 'submitAbstract'])->name('submit.data');
