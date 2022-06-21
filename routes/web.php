<?php

use App\Http\Controllers\KostController;
use Illuminate\Support\Facades\Route;

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

Route::post('/filter','KostController@filter_kecamatan');







Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dosen-home' , 'DosenController@index');

Route::resource('dosen','DosenController');

//Route::get('/dosen' , 'DosenController@index');

Route::get('/dosen/{id}' , 'DosenController@show');

Route::get('/profiledosen' , 'DosenController@profile');


//Route::get('/mahasiswa{id?}', function ($id="Tidak ada nama") {
//    return "Data Mahasiswa : ".$id;
//});


//Route::view('/infomhs','infomhs',['nama'=>'Anindito']);
 
//Route::redirect('/mhs','infomhs');


//Route::get('/dosen','Dosen@index' );
Route::get('/makul','Dosen@matakuliah' );
Route::get('/karya','Dosen@karya' );



Auth::routes();

Route::get('/dashboard' , 'KostController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'ProfileController@index')->name('profile');
});

Route::get('/home', 'HomeController@index')->name('home');
