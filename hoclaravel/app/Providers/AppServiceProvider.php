<?php

namespace App\Providers;

use App\View\Components\Alert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
// use App\View\Components\Inputs\Button;
// use App\View\Components\Forms\Button as FormButton;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     Blade::directive('datatime', function ($expression){
    //         $expression = trim($expression, '\'');
    //         $expression = trim($expression, '"');
            

    //         $dataObject = date_create($expression);
    //         if(!empty($dataObject)){
    //             $dataFormat = $dataObject->format('d/m/Y H:i:s');
    //             return  $dataFormat ;
    //         }
    //        return false;
    //     });
    // }

    public function boot(){
        Blade::if('env', function ($value) { //@env('local')
            //trả về giá trị boolean
            if (config('app.env')===$value){
                return true;
            }
            return false;
        } );

        Blade::component('package-alert', Alert::class);
        // Blade::component('button', Button::class);
        // Blade::component('forms-button', Button::class);


    }
}
