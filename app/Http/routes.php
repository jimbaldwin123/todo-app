<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('/search','TasksController@search');
Route::post('/projects/{projects}','ProjectsController@show');

/*
Route::group(array('before' => 'auth'), function()
{
    Route::resource('projects','ProjectsController'); 
});
*/
Route::resource('/', 'ProjectsController');
Route::resource('/projects{slug}/edit', 'ProjectsController@edit');
Route::resource('projects', 'ProjectsController');

Route::resource('projects.tasks', 'TasksController');

Route::get('datatables/data','ProjectsController@anyData');

Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});

Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});

