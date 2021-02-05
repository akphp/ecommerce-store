<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


  public function __construct()
  {
    parent::__construct();
  }

    protected function customersLogin($email , $password )
    {

      $data1 = [
        'email' => $email,
        'password' => $password,
    ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."customers/login",
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
         
        ) );
        
        $login = curl_exec($curl);
        $categories = json_decode($login , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $login;
    }




    public function login()
    {

      if(Session::get('user')){
        return Redirect::to('/');

      }
      return view('auth.login');
    }

    public function register()
    {

      if(Session::get('user')){
        return Redirect::to('/');

      }
      return view('auth.register');
    }

    public function registerType()
    {
      if(Session::get('user')){
        return Redirect::to('/');

      }
      return view('auth.registerType');
    }

    

    
    public function postLogin(Request $request)
    {


      $rules = [
        'email'     => 'required|email',
        'password'  => 'required|min:6'
    ];

    $customMessages = [
        'required' => 'هذا الحقل مطلوب .' ,
        'email' => 'يجب ادخال بريد  الكترونى صالح ' ,
    ];

    $this->validate($request, $rules, $customMessages);
    
      $email = strtolower($request->email);
      $password = $request->password;
      $login = json_decode ($this->customersLogin($email , $password) ,true ) ;
          
      if ($login['success'] == true) {
          Session::put('user', $login['data']);

          session()->flash('Add',  __('admin.loginSucc'));
          return Redirect::to('/')->with('success', $login['message']);
      
      } else {
        // dd($login['message']);
        session()->flash('delete',  $login['message']);
          return Redirect::back()
          ->withErrors([$login['message'] ]);
      }
    }



    public function postRegister(Request $request)
    {

      $email = strtolower($request->email);
      $name = $request->name;
      $last_name = $request->last_name;
      $password = $request->password;
      $password_confirmation = $request->password_confirmation;
      $telephone = $request->telephone;

      $register = $this->Apiregister($name ,$last_name ,  $email , $password , $password_confirmation , $telephone);
          
      if ($register['success'] == true) {

          session()->flash('Add',  __('admin.loginSucc'));
          return Redirect::to('/auth/login')->with('success', $register['message']);
      
      } else {
        // dd($login['message']);
        session()->flash('delete',  $register['message']);
          return Redirect::back()
          ->withErrors([$register['message'] ]);
      }
    }



    public function profile()
    {
      // dd(  Session::get('user') );
      $favorite = $this->getFavorite();
      // dd($favorite);
      return view('auth.profile' , ['favorite' => $favorite['data']]);
      
    }

    
    public function wishlist()
    {
      // dd(  Session::get('user') );
      $favorite = $this->getFavorite();
      // dd($favorite);
      return view('auth.wishlist' , ['favorite' => $favorite['data']]);
      
    }

    


    public function getFavorite()
    {

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_URL')."customers/products/favorite",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false  ,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 120,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Cache-Control: no-cache",
          "brand-id:3",
          "X-localization:ar",
          "api-token:".Session::get('user')['api_token'] ,
          "channel:web"
        ),
      ));
      
      $favorite = curl_exec($curl);
      $favorite = json_decode($favorite , true);
      $err = curl_error($curl);
      
      curl_close($curl);

      return $favorite;
      
    }


    public function logout()
    {
          
    
      $logout = $this->LogoutApi() ;
             Request()->session()->forget('user');
      if ($logout['success'] == true) {
        Request()->session()->forget('user');
          // Session::flush('user');

          session()->flash('Add',  __('admin.logoutSe'));
          
          return Redirect::to('/auth/login')->with('success', $logout['message']);
      
      } else {
        // dd($login['message']);
        
        session()->flash('Add',  $logout['message']);
          return Redirect::back()
          ->withErrors([$logout['message'] ]);
      }
    }


    protected function LogoutApi()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."customers/logout",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST", 
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "brand-id:".env('BRAND_ID'),
            "X-localization:ar",
            "api-token:".Session::get('user')['api_token'] ,
            "channel:web"

          ),
         
        )  );

       
        $logout = curl_exec($curl);
        $logout = json_decode($logout , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $logout;
    }





    protected function Apiregister($name ,$last_name ,  $email , $password , $password_confirmation , $telephone )
    {

      $data1 = [
        'name' => $name ,
        'last_name' =>$last_name,
        'email' => $email,
        'password' => $password,
        'password_confirmation' => $password_confirmation,
        'telephone' =>$telephone
    ];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => env('API_URL')."customers/store",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data1,
 
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "brand-id:3",
            "X-localization:ar",
            "channel:web"

          ),
         
        ) );
        
        $register = curl_exec($curl);
        $register = json_decode($register , true);
        $err = curl_error($curl);
        
        curl_close($curl);

        return $register;
    }


}
