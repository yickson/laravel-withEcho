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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::group(['middleware' => 'auth'], function (){
//    Route::group(['prefix' => 'mensajes', 'as' => 'mensajes.'], function (){
//       Route::get('/', 'MensajeController@index');
//       Route::get('crear', 'MensajeController@create')->name('crear');
//       Route::post('almacenar', 'MensajeController@store');
//    });
//});

Route::get('/', function () {
    return view('welcome');
});

// Return all messages that will populate our chat messages
Route::get('/getAll', function () {
    $messages = \App\Mensaje::take(200)->pluck('subject');
    return $messages;
});

// Allows us to post new message
Route::post('/post', function () {
    $content = request('subject');
    $message = new \App\Mensaje();
    $message->subject = $content;
    $message->save();
    event(new \App\Events\MessageWasCreated($content));
    return $content;
});
