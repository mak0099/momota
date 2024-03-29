<?php


// Website
Route::get('/', ['as'=>'home', 'uses'=>'WebsiteController@home']);
Route::get('/missions/{mission}/mission_detail', ['as'=>'mission_detail', 'uses'=>'WebsiteController@mission_detail']);
Route::get('/projects', ['as'=>'projects', 'uses'=>'WebsiteController@projects']);
Route::get('/missions', ['as'=>'missions', 'uses'=>'WebsiteController@missions']);
Route::get('/projects/{project}/project_detail', ['as'=>'project_detail', 'uses'=>'WebsiteController@project_detail']);
Route::get('/news', ['as'=>'news', 'uses'=>'WebsiteController@news']);
Route::get('/news/{news}/news_detail', ['as'=>'news_detail', 'uses'=>'WebsiteController@news_detail']);
Route::get('/events', ['as'=>'events', 'uses'=>'WebsiteController@events']);
Route::get('/photo-gallery', ['as'=>'photo-gallery', 'uses'=>'WebsiteController@photo_gallery']);
Route::get('/events/{event}/event_detail', ['as'=>'event_detail', 'uses'=>'WebsiteController@event_detail']);
Route::get('/about-us', ['as'=>'about_us', 'uses'=>'WebsiteController@about_us']);
Route::get('/contacts', ['as'=>'contacts', 'uses'=>'WebsiteController@contacts']);

// Dashboard
Route::group(['prefix'=>'dashboard'], function(){
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', ['as' => 'login', 'uses' => 'DashboardController@login']);
        Route::post('login', ['as' => 'attempt_login', 'uses' => 'DashboardController@attemptLogin']);
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', ['as' => 'logout', 'uses' => 'DashboardController@logout']);
        Route::get('/', ['as'=>'dashboard', 'uses'=>'DashboardController@dashboard']);
        Route::get('/profile', ['as'=>'profile', 'uses'=>'DashboardController@view_profile']);
        Route::put('/update-profile', ['as'=>'update_profile', 'uses'=>'DashboardController@update_profile']);
        Route::put('/update-password', ['as'=>'update_password', 'uses'=>'DashboardController@update_password']);
        Route::get('/change-activation', ['as'=>'change_activation', 'uses'=>'DashboardController@change_activation']);
        Route::get('/change-feature', ['as'=>'change_feature', 'uses'=>'DashboardController@change_feature']);
        Route::resource('mission', 'MissionController');
        Route::resource('project', 'ProjectController');
        Route::resource('news', 'NewsController');
        Route::resource('event', 'EventController');
        Route::resource('gallery', 'GalleryController');
    });
});
