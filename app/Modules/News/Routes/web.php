<?php 
Route::group( [ 'namespace' => 'App\Modules\News\Controllers', 'as' => 'news.', ], function(){
    Route::get('/news', ['uses' => 'NewsController@index']);
});