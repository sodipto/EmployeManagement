<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Admin route group

 // Route::group(array('prefix' => 'admin'), function()
 // {

 //  Route::get('index', ['as' => 'index', 'uses' => 'AdminController@index']);
   
 // });


 Route::group(['prefix'=>'admin'],function(){

 	//This route check admin layout
    Route::get('layout', function () {
      return view('layouts.Admin');
    });


    //Employe catagory insert,update,delete

     Route::resource('EmployeCatagory','CatagoryController');

     //end 

     Route::get('AddNewEmploye', function () {
      return view('Admin.AddNewEmploye');
    });

  
});


 


