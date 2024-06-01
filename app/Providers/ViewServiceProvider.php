<?php

namespace App\Providers;

use App\Models\Conference;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class ViewServiceProvider extends ServiceProvider
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
        // Use view composer to pass data to the header and footer views
        View::composer(['partials.header', 'partials.footer', 'layouts.app'], function ($view) {
            if(env('APP_ENV') == 'production'){
                $domain = Request::getHost();
            }else {
                $domain = 'https://www.instagram.com/';
            }
            $data = Conference::where('domain', $domain)->first();
            if(!$data){
                dd("Your domain is not added as conference, please talk to administrator");
            }


            // Pass data to the view
            $view->with('data', $data);
            // $view->with('categories', $categories);
        });
    }
}
