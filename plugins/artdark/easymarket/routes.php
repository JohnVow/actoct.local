<?php

use ArtDark\EasyMarket\Classes\Send;



Route::group(['middleware' => 'web'], function () {

    Route::post('send/send', function () {
        $url = $_SERVER['HTTP_REFERER'];
        Send::sendData($url);
    });
});