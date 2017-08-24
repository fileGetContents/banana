<?php

Route::group(['namespace' => "Web"], function () {

    Route::any('/', "WelcomeController@welcome");  // 入口文件
    Route::any('model', "WelcomeController@index"); // 加载界面

    Route::any('frame', "FbeginController@frame");
    Route::any('friend', "FbeginController@friend");
    Route::any('friend-list', 'FbeginController@friendList');

    Route::any('start', "SbeginController@start");
    Route::any('small', "SbeginController@small");
    Route::any('sendpost', "SbeginController@sendPost");

    Route::any('outdoor', "ObeginController@outdoor");
    Route::any('order', "ObeginController@order");
    Route::any('other', 'ObeginController@other');
    Route::any('otherjoin', "ObeginController@otherJoin");
    Route::any('otherpost', 'ObeginController@otherPost');


    Route::any('moneybag', "MbeginController@moneybag");
    Route::any('message', "MbeginController@message");
    Route::any('made', 'MbeginController@made');


    Route::any('activedetails/{id?}', 'AbeginController@activeDetails');
    Route::any('abroad', 'AbeginController@abroad');
    Route::any('addplace2', 'AbeginController@addplace2');
    Route::any('addplace', "AbeginController@addplace");
    Route::any('all', "AbeginController@all");


    Route::any('pannel', 'PbeginController@pannel');
    Route::any('person', 'PbeginController@person');
    Route::any('post', "PbeginController@post");
    Route::any('payorder', "PbeginController@payOrder");
    Route::any('payorder2', "PbeginController@payOrder2");
    Route::any('pay', "PbeginController@pay");
    Route::any('pay2', "PbeginController@pay2");


    Route::any('hotel', "HbeginController@hotel");
    Route::any('home', 'HbeginController@home');
    Route::any('home-class', "HbeginController@homeClass");
    Route::any('home-special', "HbeginController@homeSpecial");
    Route::any('home-new', "HbeginController@homeNew");


    Route::any('live', "LbeginController@live");
    Route::any('login', "LbeginController@login");


    Route::any('talk', "TbeginController@talk");
    Route::any('details', "DbeginController@details");
    Route::any('register', "RbeginController@register");

});


Route::group(['namespace' => "Api"], function () {

    Route::post("like/address", "TravelController@ajaxLikeAddress"); // 匹配关键搜索

});

Route::any('test', "TestController@index");



