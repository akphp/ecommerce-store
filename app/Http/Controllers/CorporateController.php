<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function create()
    {
        return view('site.corporates.create' );
    }

    public function store(Request $request)
    {
      return $request->all();
    }

    protected function ApiStroe($data)
    {

      $data1 = $data ;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."corporates/store",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data1,
 
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
