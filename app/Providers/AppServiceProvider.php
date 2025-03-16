<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        if(!defined('PRICELIST')){
            $date = date('Ymds');
            $priceList = [
                "fast" => [
                    "name" => "Fast Clean",
                    "price" => '35.000',
                    "prefix" => 'FC-'.$date.'-',
                ],
                "deep" => [
                    "name" => "Deep Clean",
                    "price" => '50.000',
                    "prefix" => 'DC-'.$date.'-',
                ],
                "unyellowing" => [
                    "name" => "Unyellowing",
                    "price"=> '70.000',
                    "prefix" => 'UY-'.$date.'-',
                ],
            ];
            define('PRICELIST', $priceList);
        }
        //
    }
}
