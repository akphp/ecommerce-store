<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Session;

trait GeneralTrait {


  protected function Getcategories()
  {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_URL')."categories/getLeveling",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false  ,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 90,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Cache-Control: no-cache",
          "brand-id:5",
          "X-localization:ar",
          "channel:web"
        ),
      ));
      
      $categories = curl_exec($curl);
      $categories = json_decode($categories , true);
      $err = curl_error($curl);
      
      curl_close($curl);

      return $categories;
  }

    public function addFavorite($id) {        
      $data1 = [
        'product_id' => $id,
    ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."customers/products/favorite",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data1,
 
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "brand-id:".env('BRAND_ID'),
            "api-token:".Session::get('user')['api_token'] ,
            "X-localization:ar",
            "channel:web",


          ),
         
        ) );
        
        $favorite = curl_exec($curl);
        $favorite = json_decode($favorite , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $favorite;

    }



    public function deleteFavorite($id) {        
      $data1 = [
        'product_id' => $id,
    ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."customers/products/favorite?product_id=".$id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "DELETE",
          // CURLOPT_POSTFIELDS => $data1,
 
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "brand-id:".env('BRAND_ID'),
            "api-token:".Session::get('user')['api_token'] ,
            "X-localization:ar",
            "channel:web",


          ),
         
        ) );
        
        $favorite_delete = curl_exec($curl);
        $favorite_delete = json_decode($favorite_delete , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $favorite_delete;

    }



    public function getProductByCat($id , $pageNumber , $n, $order_by)
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_URL')."products/getInCategory?category_id=".$id."&price_range=2,800&paginate=".$pageNumber."&page=".$n."&order_by=".$order_by."&sort_direction=ASC",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 90,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Cache-Control: no-cache",
          "brand-id:5",
          "X-localization:ar",
          "channel:web"
        ),
      ));
      
      $products = curl_exec($curl);
      $products = json_decode($products , true);
      $err = curl_error($curl);
      
      curl_close($curl);

      return $products;
    }
}