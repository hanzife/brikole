<?php

use Illuminate\Support\Facades\Route;


//rederect to home page
Route::resource('/','HomeController')->only(['index']);
Route::get('/home', 'HomeController@index')->name('home');

//rederect to Search Result
Route::get('/Search/{profession}/{ville}','HomeController@Search');   

//Selected Profile From Search Results
Route::get('/search/{id_brikoleur}','HomeController@show');
//Brikoleur's Comments 
Route::get('/search/{id_brikoleur}/comments','HomeController@showComments')->name('clientComments');
//Add Comment for Clients
Route::post('/search/{id_brikoleur}/addComment','ClientController@postComment')->name('addComment');
// Route::get('/search/{id_brikoleur}/getComment','ClientController@getComment')->name('getComment');
//Brikoleur Add TO Fav
Route::get('/search/{id_brikoleur}/BrikoleurAddFav','ClientController@BrikoleurAddFav')->name('BrikoleurAddFav');

//load more on searchreasuls
Route::get('/sr_loadmore','HomeController@Searchloadmore')->name('sr_loadmore');
//SignUp Brikoleur
Auth::routes();
//SignUp Brikoleur Step 2 - Select a Profession
Route::get('/signupBrikoleur_2', 'signupbrikoleur2Controller@index');  
//SignUp Brikoleur Step 3 - Select a Sub-Profession Within selected Profession
Route::get('/signupBrikoleur_3/{professions}', 'signupbrikoleur2Controller@getSubProfession'); 
//SignUp Brikoleur Step 3 - Upload Img - Update Discription after inserting to SpBrikoleur
Route::get('/signupBrikoleur_4/{selectedSubPrefessions}','signupbrikoleur2Controller@updateSpBrikoleur');
//SignUp Brikoleur Step 3 - SaveImage and Resirect to Profile 
Route::post('/portfolio','signupbrikoleur2Controller@saveimage');
Route::get('/myportfolio','signupbrikoleur2Controller@myportfolio')->name('myportfolio');
//Upload Portfolio Images 
Route::post('/uploadImagesPortfolio','signupbrikoleur2Controller@uploadImagesPortfolio');
//Delete Images 
Route::get('/DeletePicture','signupbrikoleur2Controller@DeletePicture')->name('DeletePicture');



//Client 
Route::get('/ClientRegister', function () {
    return view('Auth.ClientRegister');
       });
//Client SignUp       
Route::post('/registerclient', 'Auth\ClientRegisterController@register')->name('registerclient');       


// homeclient
Route::get('/clientdashboard','ClientController@index')->name('clientdashboard');       
//Client Dashboard
Route::get('/Historique','ClientController@Historique');
//Delete History
Route::get('/deleteHistory','ClientController@deleteHistory')->name('deleteHistory');
//Comments
Route::get('/clientComments','ClientController@clientComments')->name('clientComments');
//Favourits
Route::get('clientFavoris','ClientController@clientFavoris')->name('clientFavoris');
//Delete Favourite
Route::get('deletefavorit','ClientController@deletefavorit')->name('deletefavorit');
//LogOut
Route::get('/logoutClient','ClientController@forgetClient')->name('forgetClient');     
// Route::get('/client','ClientController@index');



//Login
Route::post('checklogin','Auth\LoginController@checklogin')->name('checklogin');

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