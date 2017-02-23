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

Route::get('/allusers', function () {
  $data['users'] = \App\User::all();
  return view('allusers', $data);
});

Route::get('/admin', function () {
  $data['users'] = \App\User::all();
  return view('admin', $data);
});

Route::get('/allusers/{id}', function ($id) {
  $data['user'] = \App\User::find($id);
  return view ('singleuser', $data);
  dd($data);

});



Route::get('/', function () {
    return view('singleuser');
});

Route::get('about', function () {

    return view('about');

});
Route::get('/about/about', function () {

    return view('aboutabout');

});
