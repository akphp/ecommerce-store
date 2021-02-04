<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Mockery\Matcher\Closure;

class SiteController extends Controller
{


    public function __construct()
    {
      parent::__construct();

       $home =  $this->GetHome();
       $slider_images = $home['data']['slider_images'];
       $banners = $home['data']['banners'];
       $home_sliders = $home['data']['home_sliders']; 
       
      //  dd($slider_images);
        View::share([
          'slider_images' =>  $slider_images,
          'banners' =>  $banners,
          'home_sliders' =>  $home_sliders,
      ]);
    }

  

    
    public function index()
    {
            //  dd(Session::get('user')['name']);
        return view('site.home');
    }


    protected function GetHome()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."home",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 20,
          CURLOPT_TIMEOUT => 190,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_SSL_VERIFYPEER => false  ,
          CURLOPT_HTTPAUTH=>CURLAUTH_BASIC,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(

            "Cache-Control: no-cache",
            "brand-id:5",
            "X-localization:ar",
            "channel:app"
          ),
        ));
        
        $home = curl_exec($curl);
        $home = json_decode($home , true);
        $err = curl_error($curl);

        curl_close($curl);
                // dd($home);

        return $home;
    }


    // protected function GetProduct()
    // {
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //       CURLOPT_URL => env('API_URL')."products/getAll",
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => "",
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 30,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => "GET",
    //       CURLOPT_HTTPHEADER => array(
    //         "Cache-Control: no-cache",
    //         "brand-id:5",
    //         "X-localization:ar",
    //       ),
    //     ));
        
    //     $products = curl_exec($curl);
    //     $products = json_decode($products , true);
    //     $err = curl_error($curl);
        
    //     curl_close($curl);

    //     return $products;
    // }


    public function changeLanguage($lang)
    {
        if(in_array($lang,['en','ar'])){
            session(['locale'=> $lang]);
          }
          app()->setLocale(session('locale'));

          return back();


    }
}
