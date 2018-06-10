<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});


Route::get('/', 'AdminController@index');

Route::get('/login', 'AdminController@index');
Route::post('/login', 'AdminController@login');
Route::get('/logout', 'AdminController@logout');


//Route::controller('api', 'ApiController');

Route::get('api', 'ApiController@index');
Route::get('api/test', 'ApiController@test');
Route::get('api/more', 'ApiController@more');



Route::group(array('before' => 'auth'), function() {

    Route::get('/dashboard', 'AdminController@dashboard');


    Route::get('/list/all','ContactController@index');
    Route::get('list/add', 'ContactController@add');
    Route::post('list/add', 'ContactController@newContact');
    Route::get('viewContactDetails/{id}','ContactController@viewContactDetails');

    Route::get('editcontactperosnaldetails/{id}', 'ContactController@editcontactperosnaldetails');

    Route::post('editcontactperosnaldetails/{id}', 'ContactController@editcontactperosnaldetailspost');


    Route::get('addcontactaddresstocontact/{id}','ContactController@addcontactaddresstocontact');
    Route::post('addcontactaddresstocontact/{id}','ContactController@addaddressfornewcontact');
    Route::get('deletecontactaddress/{id}/{contact}','ContactController@deletecontactaddress');
    Route::get('editcontactaddress/{id}/{contact}', 'ContactController@editcontactaddress');
    Route::post('editcontactaddress/{id}/{contact}', 'ContactController@editcontactaddresspost');

    Route::get('editcontactphonenumber/{id}/{contact}', 'ContactController@editcontactphonenumber');
    Route::post('editcontactphonenumber/{id}/{contact}', 'ContactController@editcontactphonenumberpost');

    Route::get('deletecontactphonenumber/{id}/{contact}', 'ContactController@deletecontactphonenumber');


    Route::get('addnewcontactphonenumber/{id}', 'ContactController@addnewcontactphonenumber');
    Route::post('addnewcontactphonenumber/{id}','ContactController@addnewcontactphonenumberpost');



    Route::get('addnewcontactemailladdress/{id}', 'ContactController@addnewcontactemailladdress');
    Route::post('addnewcontactemailladdress/{id}', 'ContactController@addnewcontactemailladdresspost');

    Route::get('editnewcontactemailaddreess/{id}/{contact}', 'ContactController@editnewcontactemailaddreess');
    Route::post('editnewcontactemailaddreess/{id}/{contact}', 'ContactController@editnewcontactemailaddreesspost');

    Route::get('deletenewcontactemailaddress/{id}/{contact}', 'ContactController@deletenewcontactemailaddress');





    Route::get('addnewcontactwebsiteurl/{id}', 'ContactController@addnewcontactwebsiteurl');
    Route::post('addnewcontactwebsiteurl/{id}', 'ContactController@addnewcontactwebsiteurlpost');

    Route::get('deletecontactwebsiteurl/{id}/{contact}', 'ContactController@deletecontactwebsiteurl');
    Route::get('editcontactwebsiteurl/{id}/{contact}', 'ContactController@editcontactwebsiteurl');
    Route::post('editcontactwebsiteurl/{id}/{contact}', 'ContactController@editcontactwebsiteurlpost');


});