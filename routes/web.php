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

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/add', 'EventController@create')->name('create_event');

Route::get('setlocale', function (Request $request) {

    $locale = $request->input('locale');
    if (in_array($locale, config('app.locales'))) {
        session(['locale' => $locale]);

    }
    return redirect()->back();
})->name("setlocale");


Route::get('/search', 'SearchController@search')->name('search_event');


Route::get('/guide', function () {
    return view('guide');
})->name('guide');

Route::get('/ambassadors', function () {
    return view('ambassadors');
})->name('ambassadors');

Route::get('/schools', function () {
    return view('schools');
})->name('schools');

Route::get('/scoreboard', function () {
    return view('scoreboard');
})->name('scoreboard');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('view/{event}/{slug}', 'EventController@show')->name('view_event');

Route::get('/my', 'EventController@my')->name('my_events');

Route::post('/events', 'EventController@store');


Auth::routes();
