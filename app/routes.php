<?php

Route::get('/', function () {
    return View::make('home', ['page' => 'home']);
});

Route::get('/mission-visions-goals', function () {
    return View::make('mission_vision_goals', ['page' => 'mission']);
});

Route::get('/message', function () {
    return View::make('message', ['page' => 'message']);
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

Route::get('/e-learning', 'MainController@showELearning');
Route::post('login',     'MainController@login');
Route::get('logout',     'MainController@logout');
