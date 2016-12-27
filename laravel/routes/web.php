<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Head coach views:

Route::get('/main_panel', function () {
    return view('main_panel');
});

Route::get('/calendar', function () {
    return view('calendar');
});


Route::get('/category_group', function () {
    return view('category_group');
});

Route::get('/add_category', function () {
    return view('add_category');
});

Route::get('/add_group', function () {
    return view('add_group');
});

Route::get('/applications', function () {
    return view('applications');
});


Route:: post('/add_comp', 'CompetitionController@store');

Route::get('/add_competition', function () {
    return view('add_competition');
});

Route::get('/choose_competition', 'CompetitionController@index');

Route::get('/current_competition_{id}', 'CompetitionController@showCurrent')->name('CompetitionShow');

Route::get('/competition_main', 'CompetitionController@show_main_data');

Route::post('/edit_competition', 'CompetitionController@edit_competition');

Route::post('/update_competition', 'CompetitionController@update_competition');

//добавление категории:
Route::post('/add_category', 'CategoryController@add_category');

Route::get('/get_back', 'CompetitionController@get_back');

Route::post('/add_group', 'GroupController@add');

Route::get('/groups', 'GroupController@show');

