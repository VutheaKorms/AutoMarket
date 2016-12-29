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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
Route::get('/', function () {
    return view('index');
});


Route::get('names', function()
{
    return array(
        1 => "John",
        2 => "Mary",
        3 => "Steven"
    );
});

Route::get('names/{id}', function($id)
{
    $names = array(
        1 => "John",
        2 => "Mary",
        3 => "Steven"
    );
    return array($id => $names[$id]);
});


Route::get('/api/v1/employees/{id?}', 'Employees@index');
Route::post('/api/v1/employees', 'Employees@store');
Route::post('/api/v1/employees/{id}', 'Employees@update');
Route::delete('/api/v1/employees/{id}', 'Employees@destroy');

Route::get('/', function()
{
    return View::make('index');
});

Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('photos', 'PhotoController');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');

});

Route::resource('files', 'ImagesController');

Route::resource('names', 'NameController');

*/


/*
Route::get('sample-restful-apis', function()
{
    return array(
        1 => "expertphp",
        2 => "demo"
    );
});

Route::group(array('prefix' => 'api'), function() {
    Route::resource('restful-apis','APIController');
});

*/

/*Route::get('/api/v1/employees/{id?}', 'Employees@index'); */
Route::post('/api/v1/employees/{id?}', 'Employees@update');
Route::post('/api/v1/employees', 'Employees@store');
