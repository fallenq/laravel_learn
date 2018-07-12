<?php

Route::group(['as'=>'home::', 'namespace'=>'Frontend\V0\Home'], function () {
    Route::get('/home', ['as' => 'home', 'uses' => 'IndexController@index']);
});