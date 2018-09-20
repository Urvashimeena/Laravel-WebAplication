<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class offer extends Controller
{
    public function megaOffer(Request $request)
    {
        $query2=DB::select("select * from shop_category");
        $query=DB::select("select * from shopkeeper_productinfo as s join shopkeeper_megaoffer as o ON (s.shopkeeper_id=o.mega_id) where o.status='1' order by discount DESC limit 1;");
        
        $query1=DB::select(" select *,shopkeeper_name from shopkeeper_productinfo join shopkeeper_registeration as r ON (shopkeeper_productinfo.shop_code = r.shop_code)  join shopkeeper_advertisement as a ON(a.shop_code=shopkeeper_productinfo.shop_code) where a.status='1' order by discount DESC limit 6;");
        
        $query3=DB::select("select *,shopkeeper_name from shopkeeper_productinfo join shopkeeper_registeration as r ON (shopkeeper_productinfo.shop_code = r.shop_code) join shopkeeper_advertisement as a ON(a.shop_code=shopkeeper_productinfo.shop_code) where a.status='1' order by count DESC limit 6;");
         return view('pages.index',['category'=>$query,'list'=>$query1,'list1'=>$query3,'category_list'=>$query2]);
       

    }
    public function detail()
    {
        $shop_code=Input::get('shop_code');
        $pid=Input::get('pid');
        echo $shop_code;
        echo $pid;
        $result=DB::select("select * from shopkeeper_productinfo where product_id=$pid");
        
        foreach ($result as $value)
        {
            $count=$value->count;
        }
         $count=$count+1;
        DB::table('shopkeeper_productinfo')
            ->where('product_id',$pid)
            ->update(['count' => $count]);
        echo $count;
        return redirect()->action('redirect@shop',['shop_code'=>$shop_code]);
       
    }
    public function product($product) 
    {
       
//        return view('pages.product',['category'=>$query]);
        
        return redirect()->action('redirect@productdetail1',['product'=>$product]); 
    }
    public function search_s() 
    {
   
        $str=$_REQUEST["str1"];
          
         
        $query=  DB::select("select * from shopkeeper_productinfo join shopkeeper_registeration ON(shopkeeper_productinfo.shop_code=shopkeeper_registeration.shop_code)where lower(product_name) like '%$str%'");
        // return Redirect::route('/Clientinfo')->with($clients);
        return view('pages.searchproduct',['category'=>$query]);
    }

}
