<?php
Route::group( [ 'namespace' => 'App\Modules\Admins\Http\Controllers', 'middleware' => ['web']], function(){
    Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/user/index', 'HomeController@userProfile');

    Route::group(['middleware' => ['status', 'auth']], function() {
        Route::group([ 'namespace' => 'Users\Admin', 'prefix' => 'admin'], function() {
            Route::resource('index', 'MainController')->names('users.admin.index');
        });
    });
});