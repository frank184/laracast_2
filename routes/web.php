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
    return view('welcome');
});
/*
  GET /projects (index)
  GET /projects/create (create)
  GET /projects/:id (show)
  POST /projects (store)
  GET /projects/:id/edit (edit)
  PUT /projects/:id (update)
  DELETE /projects/:id (destroy)
*/
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects', 'ProjectsController@show');
// Route::get('/projects', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects', 'ProjectsController@edit');
// Route::put('/projects', 'ProjectsController@update');
// Route::delete('/projects', 'ProjectsController@destroy');
Route::resource('/projects', 'ProjectsController');
