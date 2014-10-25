<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', function() {
	return View::make('inscription');
});

Route::post('inscription', function()
{
	$rules = array(
    'nom' => 'required|min:5|max:20|alpha',
    'passe' => 'required|min:6|max:10|alpha',
    'confirmepasse' => 'required|same:passe'
);
	$validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return Redirect::to('login')->withErrors($validator);

    }
    else echo 'Välkommen '.Input::get('nom');
 
});


