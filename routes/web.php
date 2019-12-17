<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $agent = new \Jenssegers\Agent\Agent();
    $agentIsMobile = $agent->isMobile();
    return view('welcome', compact('agentIsMobile'));
});

Route::name('mail.contact')->post('/contact', 'EmailController@contact');
