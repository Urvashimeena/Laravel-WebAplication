<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;

use App\Http\Requests;

class Shopkeepersession extends Controller
{
    
    public function storesessiondata(Request $request)
    {
           $name=$request->get('name');
           $shop_code=$request->get('shop_code');
           $request->session()->put('shop_code',$shop_code);
           $request->session()->put('Shopkeeper_name',$name);
           $number=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
            $a=count($number);
            $request->session()->put('NumOfProduct',$a);
            $result=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
            $query2=DB::select("select * from shop_category");
         
            return view('pages.shopkeeperproduct',['category'=>$result,'category_list'=>$query2]);
        
    }
     public function deleteSessionData(Request $request)
     {
          $request->session()->forget('Shopkeeper_name');
          
          
           return redirect('/login');
     }
      public function contact()
     {
        
           return redirect('/contact');
     }
      public function login()
     {
        
           return redirect('/login');
     }    
          
}
