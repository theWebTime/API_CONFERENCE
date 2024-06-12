<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\ConferenceTagController;
use App\Http\Controllers\ConferenceTypeController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ConferenceScheduleController;
use App\Http\Controllers\ConferenceGalleryController;
use App\Http\Controllers\ConferenceTestimonialController;
use App\Http\Controllers\ConferenceMediaPartnerController;
use App\Http\Controllers\ConferenceProgramController;
use App\Http\Controllers\ConferenceSpeakerController;
use App\Http\Controllers\ConferenceCommitteeController;
use App\Http\Controllers\ConferenceImportantDateController;
use App\Http\Controllers\ConferenceFaqController;
use App\Http\Controllers\ConferenceOtherInformationController;
use App\Http\Controllers\ConferencePlanController;
use App\Http\Controllers\ConferenceAboutUsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\FiledContactUsController;
use App\Http\Controllers\SubmitAbstractController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
// Route::post('user-login', [AuthController::class, 'userLogin']);

//Open APIs
Route::group(['prefix' => '/user-side'], function () {
    Route::get('/site-setting-show', [SiteSettingController::class, 'siteSettingShow']);
    Route::get('/about-us-show', [AboutUsController::class, 'aboutUsShow']);
    Route::get('/count', [AboutUsController::class, 'count']);
    Route::get('/show-all-gallery', [GalleryController::class, 'showAllGallery']);

    // Listing Routes
    Route::get('/conference-tag-listing', [ListingController::class, 'conferenceTagList']);
    Route::get('/conference-type-listing', [ListingController::class, 'conferenceTypeList']);
    Route::get('/conference-listing', [ListingController::class, 'conferenceList']);
    Route::post('/filter-conference-listing', [ListingController::class, 'getConference']);
    Route::get('/user-listing', [ListingController::class, 'userList']);
    Route::get('/country-listing', [ListingController::class, 'countryList']);
    Route::get('/state-listing/{id}', [ListingController::class, 'stateList']);
    Route::get('/city-listing/{id}', [ListingController::class, 'cityList']);
    // USer Contact Us Route 
    Route::post('/user-contact-us', [FiledContactUsController::class, 'userStore']);
    // Filed Contact Us Route 
    Route::post('/filed-contact-us', [FiledContactUsController::class, 'filedContactUs']);
    // Submit Abstract Rute
    Route::post('/submit-abstract', [SubmitAbstractController::class, 'store']);
    // Register Route
    Route::post('/register', [RegisterController::class, 'store']);
});

// ADMIN routes APIs
Route::group(['middleware' => ['auth:api', 'checkRole:admin']],  function () {
    // Site Setting Routes
    Route::group(['prefix' => '/site-setting'], function () {
        Route::post('/store', [SiteSettingController::class, 'updateOrCreateSiteSetting']);
    });
    // About Us Routes
    Route::group(['prefix' => '/about-us'], function () {
        Route::post('/store', [AboutUsController::class, 'updateOrCreateAboutUs']);
    });
    // User Management Routes
    Route::group(['prefix' => '/user-management'], function () {
        Route::get('/index', [UserController::class, 'index']);
        // Route::post('/store', [UserController::class, 'store']);
        Route::post('/show', [UserController::class, 'show']);
        Route::post('/update', [UserController::class, 'update']);
    });
    // Conference Tag Routes
    Route::group(['prefix' => '/conference-tag'], function () {
        Route::get('/index', [ConferenceTagController::class, 'index']);
        Route::post('/store', [ConferenceTagController::class, 'store']);
        Route::post('/show', [ConferenceTagController::class, 'show']);
        Route::post('/update', [ConferenceTagController::class, 'update']);
    });
    // Conference Type Routes
    Route::group(['prefix' => '/conference-type'], function () {
        Route::get('/index', [ConferenceTypeController::class, 'index']);
        Route::post('/store', [ConferenceTypeController::class, 'store']);
        Route::post('/show', [ConferenceTypeController::class, 'show']);
        Route::post('/update', [ConferenceTypeController::class, 'update']);
    });
    Route::group(['prefix' => '/conference'], function () {
        Route::post('/store', [ConferenceController::class, 'store']);
    });
    // User Contact Us Route
    Route::group(['prefix' => '/user-contact-us'], function () {
        Route::get('/show', [FiledContactUsController::class, 'userIndex']);
    });
});

// Conference Owner APIs
Route::group(['middleware' => ['auth:api', 'checkRole:conferenceOwner']],  function () {
});

// ADMIN & Conference Owner APIs
Route::group(['middleware' => ['auth:api', 'checkRole:admin,conferenceOwner']],  function () {

    // Conference Routes
    Route::group(['prefix' => '/conference'], function () {
        Route::get('/index', [ConferenceController::class, 'index']);
        Route::post('/show', [ConferenceController::class, 'show']);
        Route::post('/update', [ConferenceController::class, 'update']);
    });
    // Conference Schedule Routes
    Route::group(['prefix' => '/conference-schedule'], function () {
        Route::post('/index', [ConferenceScheduleController::class, 'index']);
        Route::post('/store', [ConferenceScheduleController::class, 'store']);
        Route::post('/delete', [ConferenceScheduleController::class, 'delete']);
    });
    // Conference Gallery Routes
    Route::group(['prefix' => '/conference-gallery'], function () {
        Route::post('/index', [ConferenceGalleryController::class, 'index']);
        Route::post('/store', [ConferenceGalleryController::class, 'store']);
        Route::post('/delete', [ConferenceGalleryController::class, 'delete']);
    });
    // Conference Testimonial Routes
    Route::group(['prefix' => '/conference-testimonial'], function () {
        Route::post('/index', [ConferenceTestimonialController::class, 'index']);
        Route::post('/store', [ConferenceTestimonialController::class, 'store']);
        Route::post('/delete', [ConferenceTestimonialController::class, 'delete']);
    });
    // Conference Media Partner Routes
    Route::group(['prefix' => '/conference-media-partner'], function () {
        Route::post('/index', [ConferenceMediaPartnerController::class, 'index']);
        Route::post('/store', [ConferenceMediaPartnerController::class, 'store']);
        Route::post('/delete', [ConferenceMediaPartnerController::class, 'delete']);
    });
    // Conference Program Routes
    Route::group(['prefix' => '/conference-program'], function () {
        Route::post('/index', [ConferenceProgramController::class, 'index']);
        Route::post('/store', [ConferenceProgramController::class, 'store']);
        Route::post('/delete', [ConferenceProgramController::class, 'delete']);
    });
    // Conference Speaker Routes
    Route::group(['prefix' => '/conference-speaker'], function () {
        Route::post('/index', [ConferenceSpeakerController::class, 'index']);
        Route::post('/store', [ConferenceSpeakerController::class, 'store']);
        Route::post('/delete', [ConferenceSpeakerController::class, 'delete']);
    });
    // Conference Committee Member Routes
    Route::group(['prefix' => '/conference-committee-member'], function () {
        Route::post('/index', [ConferenceCommitteeController::class, 'index']);
        Route::post('/store', [ConferenceCommitteeController::class, 'store']);
        Route::post('/delete', [ConferenceCommitteeController::class, 'delete']);
    });
    // Conference Important Date Routes
    Route::group(['prefix' => '/conference-important-date'], function () {
        Route::post('/index', [ConferenceImportantDateController::class, 'index']);
        Route::post('/store', [ConferenceImportantDateController::class, 'store']);
        Route::post('/delete', [ConferenceImportantDateController::class, 'delete']);
    });
    // Conference FAQ Routes
    Route::group(['prefix' => '/conference-faq'], function () {
        Route::post('/index', [ConferenceFaqController::class, 'index']);
        Route::post('/store', [ConferenceFaqController::class, 'store']);
        Route::post('/delete', [ConferenceFaqController::class, 'delete']);
    });
    // Conference Other Information Routes
    Route::group(['prefix' => '/conference-other-information'], function () {
        Route::post('/store', [ConferenceOtherInformationController::class, 'updateOrCreate']);
        Route::post('/show', [ConferenceOtherInformationController::class, 'show']);
    });
    // Conference Plan Routes
    Route::group(['prefix' => '/conference-plan'], function () {
        Route::post('/index', [ConferencePlanController::class, 'index']);
        Route::post('/store', [ConferencePlanController::class, 'store']);
        Route::post('/show', [ConferencePlanController::class, 'show']);
        Route::post('/update', [ConferencePlanController::class, 'update']);
    });
    // Conference About Us Routes
    Route::group(['prefix' => '/conference-about-us'], function () {
        Route::post('/store', [ConferenceAboutUsController::class, 'updateOrCreate']);
        Route::post('/show', [ConferenceAboutUsController::class, 'show']);
    });
    // Contact Us Routes
    Route::group(['prefix' => '/contact-us'], function () {
        Route::get('/index', [FiledContactUsController::class, 'index']);
    });
    // Submit Abstract Routes
    Route::group(['prefix' => '/submit-abstract'], function () {
        Route::get('/index', [SubmitAbstractController::class, 'index']);
    });
    // Register Routes
    Route::group(['prefix' => '/register'], function () {
        Route::get('/index', [RegisterController::class, 'index']);
    });
    // Register Routes
    Route::group(['prefix' => '/payment'], function () {
        Route::get('/index', [RegisterController::class, 'paymentUser']);
    });
    // Gallery Routes
    Route::group(['prefix' => '/gallery'], function () {
        Route::get('/index', [GalleryController::class, 'index']);
        Route::post('/store', [GalleryController::class, 'store']);
        Route::post('/delete', [GalleryController::class, 'delete']);
    });
});

Route::group(['middleware' => ['auth:api']],  function () {
    // Logout API
    Route::post('logout', [AuthController::class, 'logout']);
    // Profile Routes
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/profile_update', [AuthController::class, 'profile_update']);
});
