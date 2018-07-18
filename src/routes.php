<?php
Route::group(['prefix' => 'api', 'namespace' => 'Newone\Vaptcha\Controller'], function () {
    Route::get('vaptcha', 'VaptchaController@vaptcha');
    Route::get('vaptcha/down', 'VaptchaController@vaptchaDown');
});
