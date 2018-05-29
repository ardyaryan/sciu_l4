<?php

Route::get('/', function () {
    return View::make('home', ['page' => 'home']);
});

Route::get('/mission-visions-goals', function () {
    return View::make('mission_vision_goals', ['page' => 'mission']);
});

Route::get('/message', function () {
    //return View::make('message', ['page' => 'message']);
});

Route::get('/programs-offered', function () {
    return View::make('programs_offered', ['page' => 'programs_offered']);
});

Route::get('/tuition-fee', function () {
    return View::make('tuition_fee', ['page' => 'tuition']);
});

Route::get('/payment-options', function () {
    return View::make('payment_options', ['page' => 'payment']);
});

Route::get('/directors', function () {
    return View::make('directors', ['page' => 'directors']);
});

Route::get('/bba', function () {
    return View::make('bba', ['page' => 'bba']);
});

Route::get('/mba', function () {
    return View::make('mba', ['page' => 'mba']);
});

Route::get('/accreditation', function () {
    return View::make('accreditation', ['page' => 'accreditation']);
});

Route::get('/scholarship', function () {
    return View::make('scholarship', ['page' => 'scholarship']);
});

Route::get('/contact', function () {
    return View::make('contact', ['page' => 'contact']);
});

Route::get('/e-learning/participants', function () {
    return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.participants']);
});

Route::get('/application', function () {
    return View::make('application', ['page' => 'application']);
});

Route::get('/programs-offered', function () {
    return View::make('programs_offered', ['page' => 'program-offered']);
});

Route::get('/e-learning',               'MainController@showELearning');
Route::get('/e-library',                'MainController@showELibrary');
Route::post('login',                    'MainController@login');
Route::get('logout',                    'MainController@logout');
Route::post('newsletter',               'MainController@newsletter');
Route::get('/e-learning/my-profile',    'MainController@myProfile');
Route::get('/e-learning/mba-courses',    'MainController@showMbaCourse');

Route::get('/e-learning/apa-guideline', function () {
    if (empty(Session::get('user_id'))) {
        return Redirect::to('e-learning');
    }
    return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.apa-guideline', 'data' => []]);
});

Route::get('/e-learning/e-library-books', function () {
    if (empty(Session::get('user_id'))) {
        return Redirect::to('e-learning');
    }
    return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.e-library-books', 'data' => []]);
});

