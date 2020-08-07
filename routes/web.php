<?php

use Illuminate\Support\Facades\Route;
//
/*
| Web Routes
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//rederect to home page
Route::resource('/','HomeController')->only(['index']);
Route::get('/home', 'HomeController@index')->name('home');
//
//rederect to Search Result
Route::get('/Search/{profession}/{ville}','HomeController@Search');   
//
//Selected Profile From Search Results
Route::get('/search/{id_brikoleur}','HomeController@show');   
//

// Route::get('/search/{id_brikoleur}', function () {
//     echo "he";
//        });


//SignUp Brikoleur
Auth::routes();
//
//SignUp Brikoleur Step 2 - Select a Profession
Route::get('/signupBrikoleur_2', 'signupbrikoleur2Controller@index');  
//SignUp Brikoleur Step 3 - Select a Sub-Profession Within selected Profession
Route::get('/signupBrikoleur_3/{professions}', 'signupbrikoleur2Controller@getSubProfession'); 
//SignUp Brikoleur Step 3 - Upload Img - Update Discription after inserting to SpBrikoleur
Route::get('/signupBrikoleur_4/{selectedSubPrefessions}','signupbrikoleur2Controller@updateSpBrikoleur');
//SignUp Brikoleur Step 3 - SaveImage and Resirect to Profile 
Route::post('/portfolio','signupbrikoleur2Controller@saveimage');
Route::get('/myportfolio','signupbrikoleur2Controller@myportfolio');
//Upload Portfolio Images 
Route::post('/uploadImagesPortfolio','signupbrikoleur2Controller@uploadImagesPortfolio');


//Client 
Route::get('/ClientRegister', function () {
    return view('Auth.ClientRegister');
       });
//Client SignUp       
Route::post('/registerclient', 'Auth\ClientRegisterController@register')->name('registerclient');       


// homeclient
Route::get('/clientdashboard','ClientController@index')->name('clientdashboard');       
    
// Route::get('/client','ClientController@index');


// Route::get('/signupBrikoleur_3', function () {
//     return view('Auth.signupBrikoleur_3');
//        });

// Route::get('/getsprof/{profession}','signupbrikoleur2Controller@getsprof');   


//Brikoleru
// Route::group(['middleware'=>'brikoleur'], function() {
//   Route::get('/signupBrikoleur_2', 'signupbrikoleur2Controller@index');
// });

//Brikoleur Profile
//Visitor from Search


// Route::get('/search/B-P-V-portfolio', function () {
//     return view('BrikoleurProfile.v_visiteur.B-P-V-portfolio');
// });
//Redirect To a Page if exsits
//Route::get('/page','ControllerName@method');