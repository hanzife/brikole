<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Brikoleur;
use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         //compose all the views....
    view()->composer('layouts.master', function ($view, $guard = null) 
    {
        //$guard == "brikoleur" &&
        if ( Auth::guard($guard)->check()) {
            
            $id_brikoleur = Auth::user()->id;
            // $id_brikoleur = 1;
            $ProfileImage = DB::table('images')
            ->where('images.id_brikoleur','=',$id_brikoleur)
            ->where('images.type','=','Profile')
            ->select('images.reference')
            ->get();
            //...with this variable
            $view->with('ProfileBrikoleur', $ProfileImage);    

            }


        // if (Auth::check()){
            
        // }
       
    });  
    }
}
