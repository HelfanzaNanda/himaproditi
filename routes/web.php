<?php

Auth::routes();

/*Route::get('/', function () {
    return view('templates.default');
});*/

Route::group(['prefix' => '/admin'], function (){

    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/inventaris', 'InventarisController@index')->name('inventaris');
    Route::get('/inventaris/create', 'InventarisController@create')->name('inventaris.create');
    Route::post('/inventaris/create', 'InventarisController@store')->name('inventaris.store');
    Route::get('/inventaris/{id}/edit', 'InventarisController@edit')->name('inventaris.edit');
    Route::patch('/inventaris/{id}/edit', 'InventarisController@update')->name('inventaris.update');
    Route::get('/inventaris/{id}/destroy', 'InventarisController@destroy')->name('inventaris.destroy');

    Route::get('/anggota', 'AnggotaController@index')->name('anggota');
    Route::get('/anggota/create', 'AnggotaController@create')->name('anggota.create');
    Route::post('/anggota/create', 'AnggotaController@store')->name('anggota.store');
    Route::get('/anggota/{id}/edit', 'AnggotaController@edit')->name('anggota.edit');
    Route::patch('/anggota/{id}/edit', 'AnggotaController@update')->name('anggota.update');
    Route::get('/anggota/{id}/destroy', 'AnggotaController@destroy')->name('anggota.destroy');
    Route::get('/anggota/{id}/showbyid', 'AnggotaController@showbyid')->name('anggota.showbyid');

    Route::get('/proker', 'ProkerController@index')->name('proker');
    Route::get('/proker/create', 'ProkerController@create')->name('proker.create');
    Route::post('/proker/create', 'ProkerController@store')->name('proker.store');
    Route::get('/proker/{id}/edit', 'ProkerController@edit')->name('proker.edit');
    Route::patch('/proker/{id}/edit', 'ProkerController@update')->name('proker.update');
    Route::get('/proker/{id}/destroy', 'ProkerController@destroy')->name('proker.destroy');

    Route::get('/rapat', 'RapatController@index')->name('rapat');
    Route::get('/rapat/create', 'RapatController@create')->name('rapat.create');
    Route::post('/rapat/create', 'RapatController@store')->name('rapat.store');
    Route::get('/rapat/{id}/edit', 'RapatController@edit')->name('rapat.edit');
    Route::patch('/rapat/{id}/edit', 'RapatController@update')->name('rapat.update');
    Route::get('/rapat/{id}/destroy', 'RapatController@destroy')->name('rapat.destroy');
    Route::post('/rapat/create/{id}/uploadPdf', 'RapatController@uploadPdf')->name('rapat.hasil');

    Route::get('/admin-logout', 'Auth\LoginController@logoutAdmin')->name('admin.logout');
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/', 'FrontEndController@userIndex')->name('user.home');
Route::get('/about', 'FrontEndController@userAbout')->name('user.about');
Route::get('/anggota', 'FrontEndController@userAnggota')->name('user.anggota');
Route::get('/rapat', 'FrontEndController@userRapat')->name('user.rapat');
Route::get('/news', 'FrontEndController@userNews')->name('user.news');
Route::get('/news/{slug}', 'FrontEndController@userNewsDetail')->name('user.news-detail');
Route::get('/anggota-login', 'AuthAnggota\LoginController@showLoginForm')->name('anggota.login');
Route::post('/anggota-login', 'AuthAnggota\LoginController@login')->name('anggota.login.submit');
Route::get('/anggota-logout', 'AuthAnggota\LoginController@logout')->name('anggota.logout');


/*
Route::get('/news-detail', function () {
    return view('pages.user.news-detail');
})->name('user.news-detail');*/
