<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Showsearchproduct extends Controller
{
    public function searchresult(Request $request)
    {
     
         $name=Input::get('name');
        $str1=Input::get('Search');
         $str= strtolower($str1);
        if($name=='Product Name')
        {
      
            $query=DB::select("select DISTINCT product_name,shopkeeper_name,product_image,shopkeeper_productinfo.shop_code from shopkeeper_productinfo left join shopkeeper_registeration ON(shopkeeper_productinfo.shop_code=shopkeeper_registeration.shop_code) where product_name like '%$str%'");
            $request->session()->put('name',$name);

            return view('pages.productsearch',['search'=>$query]);
        }
        elseif($name=='Shop Name')
        {
            $query1=DB::select("SELECT DISTINCT shop_name,shop_image,shopkeeper_name,shopkeeper_productinfo.shop_code FROM shopkeeper_productinfo left join shopkeeper_registeration ON(shopkeeper_productinfo.shop_code=shopkeeper_registeration.shop_code) where lower(shop_name) like '%$str%'");
            $request->session()->put('name',$name); 
            return view('pages.productsearch',['search'=>$query1]);
        }
        elseif($name=='Landmark')
        {
          
            $query2=DB::select("SELECT DISTINCT shop_name,shop_image,shopkeeper_name,shopkeeper_productinfo.shop_code FROM shopkeeper_productinfo left join shopkeeper_registeration ON(shopkeeper_productinfo.shop_code=shopkeeper_registeration.shop_code) where lower(shop_landmark) like '%$str%'");
            $request->session()->put('name',$name);
              return view('pages.productsearch',['search'=>$query2]);
        }
    }
}
