<?php
Route::group(['prefix'=>'categories'],function (){
   Route::get('/','CategoryController@index')->name('categories.index');

});
