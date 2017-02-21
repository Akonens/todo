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

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/contacts', function () {

    return view('contacts');

});

Route::get('/forum', function () {

    return view('forum');

});

Route::get('/gallery', function () {

    return view('gallery');

});

Route::get('/news', function () {


$id = 2;

$data['id'] = $id;
$data['Vards'] = 'Nikita';
$data['Uzvards'] = 'Lavruhins';
$data['Telefons'] = '288232352';
$ids = 3;

$data2['id'] = $ids;
$data2['Vards'] = 'Jariks';
$data2['Uzvards'] = 'Lavruhins';
$data2['Telefons'] = '288232252';

dd([$data, $data2]);
    return view('news');

});

Route::get('/', function () {

    return view('welcome');

});

Route::get ('profile/{id}', function($id) {


  $data = [
    'diena' => 'Otriena',
    'id' => $id,
    'piecinieks' => '5',
    'name' => "peteris",
    'lietotajs' => \App\User::find($id)
  ];


  return view ('profile', $data);




});
