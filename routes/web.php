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


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index')->name('home');


/*Route::get('{n}', function ($n){
    echo 'JE SUIS SUR LA PAGE '.$n ;
});*/


//Lnaguage change
Route::post('/language', 'LangueController@index')->name('language');

Route::group(['middleware' => 'auth'], function () {
   //home
    Route::get('/', 'HomeController@index')->name('Home');


    Route::get('/etudiants/list', 'EtudiantController@list')->name('listEtudiant');
    Route::post('/etudiants/save', 'EtudiantController@save')->name('saveEtudiant');
    Route::get('/etudiants/add', 'EtudiantController@add')->name('addEtudiant');
    Route::get('/etudiants/show/{id}', 'EtudiantController@show')->name('showEtudiant')->where('id','[0-9]+');
    Route::get('/etudiants/edit/{id}', 'EtudiantController@edit')->name('editEtudiant')->where('id','[0-9]+');
    Route::post('/etudiants/update/{id}', 'EtudiantController@update')->name('updateEtudiant')->where('id','[0-9]+');
    Route::get('/etudiants/delete/{id}', 'EtudiantController@delete')->name('deleteEtudiant')->where('id','[0-9]+');
});


