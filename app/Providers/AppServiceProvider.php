<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        
      
    }


    // protected function GetProduct()
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //       CURLOPT_URL => env('API_URL')."products/getInCategory",
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => "",
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 30,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => "GET",
    //       CURLOPT_HTTPHEADER => array(
    //         "Cache-Control: no-cache",
    //         "brand-id:".env('BRAND_ID'),
    //         "X-localization:ar",
    //         "channel:web"

    //       ),
    //     ));
        
    //     $products = curl_exec($curl);
    //     $products = json_decode($products , true);
    //     $err = curl_error($curl);
        
    //     curl_close($curl);

    //     return $products;
    // }
}
