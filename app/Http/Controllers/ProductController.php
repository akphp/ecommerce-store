<?php

namespace App\Http\Controllers;

use App\Http\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{

  // use GeneralTrait;
    public function show($id)
    {
        $details = $this->ApiShowProduct($id);
        // dd($details['data']);
        return view('site.products.details' , ['details' => $details['data']]);
    }

    public function products($id , Request $request)
    {

      // getProductBuCat($id , $pageNumber , $n, $order_by)
      $pageNumber  = 1;
      $n = 1;
      $order_by = $request->order_by ?? "price";
        $products = $this->getProductByCat($id, $pageNumber , $n , $order_by);
        // dd($products);
        return view('site.products.showByCategory' , ['products' => $products['data']]);
    }
    


    public function favorite($id)
    {
        $favorite = $this->addFavorite($id);

        if ($favorite['success'] == true) {

          session()->flash('Add',  __('admin.addFavoriteS'));
          return Redirect()->back()->with('success', $favorite['message']);
      
      } else {
        // dd($login['message']);
        // dd($favorite);
        session()->flash('Add',  $favorite['data'][0]);

          return Redirect::back()
          ->withErrors([$favorite['message'] ]);
      }
    }

    
       public function comment(Request $request)
       {

       }


       protected function ApiComment($product_id ,$comment )
    {

      $data1 = [
        'product_id' => $product_id ,
        'comment' =>$comment,
    ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."customers/products/comment",
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
            "X-localization:ar",
            "api-token:".Session::get('user')['api_token'] ,
            "channel:web"
          ),
         
        ) );
        
        $comment = curl_exec($curl);
        $comment = json_decode($comment , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $comment;
    }


    protected function ApiShowProduct($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."products/get?product_id=".$id,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
 
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "brand-id:5",
            "X-localization:ar",
            "channel:web"

          ),
         
        ) , );
        
        $details = curl_exec($curl);
        $details = json_decode($details , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $details;
    }
}
