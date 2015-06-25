<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      AUTH                                                           |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */
Route::controllers(
    [
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]
);

Route::get('/verify/{token}',
    [
        'as' => 'verify',
        'uses' => 'Auth\AuthController@getVerify'
    ]
);

Route::get('/',
    [
        'as' => 'index',
        'uses' => 'IndexController@index'
    ]
);
Route::get('/logout',
    [
        'as' => 'logout',
        'uses' => 'Auth\AuthController@getLogout'
    ]
);

Route::get('/register',
    [
        'as' => 'register',
        'uses' => 'Auth\AuthController@getRegister'
    ]
);

Route::post('/register',
    [
        'uses' => 'Auth\AuthController@postRegister'
    ]
);

/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      NEWS                                                           |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'news', 'middleware' => 'auth.administrator'], function () {

    Route::get('/test',
        [
            'as' => 'test',
            'uses' => 'News\NewsController@getTest'
        ]
    );
});


/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                       ADMIN	                                                   |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {

    Route::get('views/{name}', function($name) {

        if (View::exists($name)) {
            return View::make($name);
        }
        return "Error 404";
    });


});


Route::get('/upload_image',
    [
        'as' => 'upload_image',
        'uses' => 'Upload\ImageUploadController@getUpload'
    ]
);

Route::post('/upload_image', 'Upload\ImageUploadController@postUpload');
