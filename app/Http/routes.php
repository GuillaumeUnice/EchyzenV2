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

Route::get('/',
    [
        'as' => 'index',
        'uses' => 'Auth\AuthController@getLogin'
    ]
);

Route::get('/logout',
    [
        'as' => 'logout',
        'uses' => 'Auth\AuthController@getLogout'
    ]
);

Route::get('/inscription/{token}',
    [
        'as' => 'inscription_etudiant',
        'uses' => 'Auth\AuthController@getInscription'
    ]
);

Route::post('/inscription/{token}', 'Auth\AuthController@postInscription');



/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      NEWS                                                     |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'news'], function () {

   
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



Route::controllers(
    [
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]
);