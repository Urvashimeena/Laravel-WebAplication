<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class ShopCategory extends Controller
{
    public function insert(Request $request)
    {
        // parse_str(file_get_contents("php://input"), $_POST);
             $str=Input::get('category');
             
             DB::insert("INSERT INTO `shop_category`(category) VALUES ('$str')");
             
            $result = DB::select('select * from shop_category');
            return view('pages.AddCategory1',['category'=>$result]);
           // ShopCategory::categorylist();
     
             
    }
    public function categorylist()
    {
      
             $category =DB::table('shop_category')->paginate(4);
          
             
            $image=DB::select("select * from admin");
           
             return view('pages.AddCategory',compact('category','image'));
            
     
             
    }
     public function delete()
    {    
          $id=$_POST["category_id"];
          
          DB::table('shop_category')->where('category_id', '=', $id)->delete();
         
      
    }
     public function update()
    {    

        $coloumn=$_POST["column"];
          DB::table('shop_category')
            ->where('category_id', $_POST["id"])
            ->update([$coloumn => $_POST["editval"]]);
          
      
    }
   
}
