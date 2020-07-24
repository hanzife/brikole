<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Redirect To a Page if exsits
//Route::get('/page','ControllerName@method');

//rederect to home page
//
Route::resource('/','HomeController')->only(['index']);
// Route::get('/home', 'HomeController@index')->name('home');

////Search Result
// //
// Route::get('/Search', function () {
//   return view('searchresults');
//      });
Route::get('/Search/{profession}/{ville}','HomeController@Search');   


// Auth::routes();
//

//Controller SignupBrikuluerZ
//
Auth::routes();

Route::get('/signupBrikoleur_2', 'signupbrikoleur2Controller@index');   
// Route::get('/signupBrikoleur_2', 'signupbrikoleur2Controller@index');  
Route::get('/signupBrikoleur_3/{professions}', 'signupbrikoleur2Controller@getSubProfession');  

// Route::get('/signupBrikoleur_3', function () {
//     return view('Auth.signupBrikoleur_3');
//        });

// Route::get('/getsprof/{profession}','signupbrikoleur2Controller@getsprof');   

Route::get('/home', 'HomeController@index')->name('home');

//Brikoleru
// Route::group(['middleware'=>'brikoleur'], function() {
//   Route::get('/signupBrikoleur_2', 'signupbrikoleur2Controller@index');
// });
