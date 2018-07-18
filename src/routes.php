<?php
Route::group(['prefix' => config('vaptcha.prefix'), 'namespace' => 'Newone\Vaptcha\Controller'], function () {
    Route::get('vaptcha', 'VaptchaController@vaptcha');
    Route::get('vaptcha/down', 'VaptchaController@vaptchaDown');
});
