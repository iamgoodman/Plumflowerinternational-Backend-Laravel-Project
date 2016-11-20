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
Route::get('/', [
    
 'uses' => 'AdminController@getIndex',
  'as' => 'index'
]);

     
     Route::get('/admin/login',[
     
     'uses'=>'AdminController@getLogin',
     'as' =>'admin.login'
     
     
     ]);
     
       Route::post('/admin/login',[
     
     'uses'=>'AdminController@postLogin',
     'as' =>'admin.login'
     
     
     ]);
     
     
     
     Route::post('/register',[
     
     'uses'=>'AdminController@postRegister',
     'as' =>'admin.register'
     
     
     ]);
   
     
       Route::get('/admin/logout',[
     
     'uses'=>'AdminController@getLogout',
     
     'as' =>'admin.logout'
     
     
     ]);
     
     
       Route::get('/profile/{token?}',[
     
     'uses'=>'AdminController@getProfile',
     
     'middleware'=>'auth',
     
     'as' =>'admin.profile'
     
  
     ]);
     
     
           Route::get('/author/{token?}',[
     
     'uses'=>'AdminController@getAuthor',
     
      'middleware'=>'auth',
      
     'as' =>'admin.profile'
     
     
     ]);
     
     
      
           Route::get('/quote/{token?}&{authorid?}',[
     
     'uses'=>'AdminController@getQuote',
     
     'middleware'=>'auth',
     
     'as' =>'admin.profile'
     
         
     ]);
     
     
     
           
     Route::get('/public',[
     
     'uses'=>'AdminController@getPublic',

     'as' =>'admin.public'
     
         
     ]);