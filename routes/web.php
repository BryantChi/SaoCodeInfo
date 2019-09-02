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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::any('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "All Cache is cleared";
});

Route::any('/', "IndexController@index")->name("Index");

Route::any('saologin', "IndexController@login")->name("SaoLogin");

Route::any('saologincount', "IndexController@getLoginCount")->name("SaoLoginCount");

Route::any('saoinvite', "IndexController@getInviteCount")->name("SaoInviteCount");

Route::any('privacy-policy', function () {
    return view('privacy-policy');
})->name('Privacy-policy');

Route::any('usageagreement', function() {
    return view('usageagreement');
})->name('Usageagreement');


Route::prefix('Mgr')->namespace('Mgr')->group(function () {
    // Controllers Within The "App\Http\Controllers\Mgr" Namespace

    Route::any('Login', 'AdminController@login')->name('MgrLogin');
    //        

    Route::middleware('manager')->group(function () {
        Route::any('', 'AdminController@index')->name('MgrIndex');  
        
        Route::any('Logout', 'AdminController@logout')->name('MgrLogout');

        Route::any('AccountMgr', 'AccountMgrController@index')->name('MgrManagerIndex');
        Route::any('AccountMgr/Create', 'AccountMgrController@create')->name('MgrManagerCreate');
        Route::any('AccountMgr/Edit/{id}', 'AccountMgrController@edit')->name('MgrManagerEdit');
        Route::get('AccountMgr/Delete/{id}', 'AccountMgrController@delete')->name('MgrManagerDelete');


    });
});
