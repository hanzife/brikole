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
// */


//Rederect to home page
Route::resource('/','HomeController')->only(['index']);

//Search Result
Route::get('/Search/{profession}/{ville}','HomeController@Search');  

//Signup Brikoleur 
Route::get('/signup', function () {
      return view('Auth.signupBrikoleur_1');
});
  



  // //Search Result
// Route::get('/Search', function () {
//   return view('searchresults');
//      });

//signup Step 2 - Professions   
// Route::get('/signupstep2','SignupBrikoluer@getProfessions');
// Route::get('/signupstep2','SignupBrikoluer@index');


//Signup Brikoleur_2 for spus-profession
// Route::get('/signupstep2', function () {
//   return view('signupBrikoleur_2');
// });
// Route::get('/signupstep2','SignupBrikoluer@index');
// Route::get('/signupstep2/{id}','SignupBrikoluer@getProfessions');


//Redirect To a Page if exsits
//Route::get('/page','ControllerName@method');


// Route::get('/', function () {
//     return view('welcome');
// });