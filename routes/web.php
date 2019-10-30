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
    return view('index');
});

Route::get('/dasboard', 'UserController@index');

Route::middleware(['auth', 'role:admin'])->group(function() {


    route ::get('/input_soal', function(){
        return view('input_soal');
    });
    Route::get('/tambah', function () {
        return view('soal');
    });
    //menerapkan aksi terhadap aktivitas yang diinputkan pada halaman input data menuju controller
    Route::post('/input_soal', 'crud@tambah')->name('tambahdata');
    Route::get('/soal', 'crud@read')->name('soal');
    Route::get('/update_soal/{id}', 'crud@edit')->name('editview');
    Route::post('/update_soal/{id}', 'crud@update')->name('update');
    Route::get('hapus/{id}', 'crud@delete');
});

Route::middleware('auth')->group(function() {
    # code...

    Route::get('/materi', 'UserController@tai');

    Route::get('/kalkulator', function () {
        return view('kalkulator_suhu');
    });
    Route::get('/quis', function () {
        return view('quis');
    });
    Route::get('/tentang', function () {
        return view('tentang');
    });

    Route::get('/login', function () {
        return view('/masuk/login');
    });

    Route::get('/register', function () {
        return view('/masuk/register');
    });

    Route::get('/test', function () {
        return view('test');
    });

    Route::get('/lajureaksi', function () {
        return view('lajureaksi');
    });

    Route::get('/pengaruh_lajureaksi', function () {
        return view('pengaruh_lajureaksi');
    });

    Route::get('/molaritas', function () {
        return view('molaritas');
    });

    Route::get('/penerapan_laju_reaksi', function () {
        return view('penerapan_laju_reaksi');
    });

    Route::get('/orde_reaksi', function () {
        return view('ordereaksi');
    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
