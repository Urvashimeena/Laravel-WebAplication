<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class redirect extends Controller
{
    public function product(Request $request)
    {
      $shop_code=$request->get('shop_code');
       $meg=DB::select("select * from shopkeeper_megaoffer where shop_code='$shop_code'");
       $mega= count($meg);
       $request->session()->put('mega',$mega);
       $number=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
        $a= count($number);
        $request->session()->put('NumOfProduct',$a);
        $result=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
        return view('pages.shopkeeperproduct',['category'=>$result]);
    }
    public function productdetail1(Request $request) 
    {
        $product=$request->get('product');
        $category=DB::select("select * from shopkeeper_productinfo join shopkeeper_registeration ON(shopkeeper_productinfo.shop_code=shopkeeper_registeration.shop_code) join shopkeeper_advertisement as a ON(a.shop_code=shopkeeper_productinfo.shop_code) where a.status='1'
          and shop_category='$product'");
        
         return view('pages.product',['category'=>$category]);
    }
    public function shop(Request $request)
    {
        $shop_code=$request->get('shop_code');
         $query=DB::select("select * from shopkeeper_registeration where shop_code='$shop_code'");
         $query1=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
         
        return view('pages.shopdetail',['category'=>$query,'list'=>$query1]);
    }
   public function category(Request $request)
   {
         $query2=DB::select("select * from shop_category");
         return view('pages.login',['category_list'=>$query2]);
         
   }


}
