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
        'uses' => 'Index\IndexController@index'
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

    Route::get('/create',
        [
            'as' => 'news_create',
            'uses' => 'News\NewsController@create'
        ]
    );

    Route::post('/create',
        [
            'as' => 'news_create',
            'uses' => 'News\NewsController@store'
        ]
    );
});


/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      PROJECT                                                           |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


    Route::resource('project', 'Project\ProjectController',
      array('only' => array('index', 'show')));

    Route::resource('project.comment', 'Project\CommentProjectController');

    Route::get('project/views/{name}', function($name) {

      if (View::exists($name)) {
        return View::make($name);
      }
      return "Error 404";
    });

/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                       ADMIN	                                                   |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'admin', 'middleware' => 'auth.administrator'], function () {



    Route::resource('project', 'Project\ProjectController',
      array('except' => array('index', 'show')));

    Route::get('project', [
      'as' => 'admin.project.index',
      'uses' => 'Project\ProjectController@adminIndex'
    ]);

    Route::resource('slide', 'Index\SlideController');


});


Route::get('/upload_image',
    [
        'as' => 'upload_image',
        'uses' => 'Upload\ImageUploadController@getUpload'
    ]
);

Route::post('/upload_image', 'Upload\ImageUploadController@postUpload');

Route::resource('rubrique', 'rubricController',
    ['names' => ['create' => 'rubric_create']]);



/*
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 |                                                      WEBSITE                                                           |
 |---------------------------------------------------------------------------------------------------------------------|
 |---------------------------------------------------------------------------------------------------------------------|
 */


Route::group(['prefix' => 'website'], function () {

    Route::get('/CV',
        [
            'as' => 'test',
            'uses' => 'WebsiteController@getCV'
        ]
    );

});

Route::get('views/{name}', function($name) {

  if (View::exists($name)) {
    return View::make($name);
  }
  return "Error 404";
});

Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');
Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');