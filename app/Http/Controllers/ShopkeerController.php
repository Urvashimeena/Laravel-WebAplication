<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;




class ShopkeerController extends Controller
{
   
     public function shopkeeperlist(Request $request)
     {
         $result=DB::select("select * from shopkeeper_registeration");
         
            $query=DB::select("select * from admin");
        
          return view('pages.shopkeeperinfo',['list'=>$result,'image'=>$query]);
     }
     public function shopkeeperdetail(Request $request)
     {
         parse_str(file_get_contents("php://input"), $_POST);
          $id=$_POST["id"];
          $result=DB::select("select * from shopkeeper_registeration where registeration_id='$id'");
          
          foreach($result as $a)
          {
              $shopcode=$a->shop_code;
          }
          $request->session()->put('shopcode',$shopcode);
          
          return view('pages.shopkeeperdetail',['list'=>$result]);
          
          
          
         
     }
     
     public function delete(Request $request)
     {
         parse_str(file_get_contents("php://input"), $_POST);
          $id=$_POST["id"];
          DB::table('shopkeeper_registeration')->where('registeration_id','=',$id)->delete();
     }
     
     public function shopkeepersearch(Request $request) 
     {
      
          parse_str(file_get_contents("php://input"), $_POST);
          $str=$_POST["str1"];
         $shopkeeper=  DB::select("select * from shopkeeper_registeration where lower(shopkeeper_name) like '%$str%'");
        
          return view('pages.shopkeeperdetail1',['list'=>$shopkeeper]);
     }
     public function showadvertisement(Request $request)
     {
         $shpcode = Session::get('shopcode');
         $result=DB::select("select * from shopkeeper_megaoffer where shop_code='$shpcode'");
         $query= DB::select("select * from shopkeeper_advertisement where shop_code='$shpcode'");

            $query1=DB::select("select * from admin");
        
          return view('pages.shopkeeperadvertisement',['list'=>$result,'other'=>$query,'image'=>$query1]);
     }
     public function update() 
     {
       
         $coloumn=$_POST["column"];
          DB::table('shopkeeper_megaoffer')
            ->where('mega_id', $_POST["id"])
            ->update([$coloumn => $_POST["editval"]]);
          
           DB::table('shopkeeper_advertisement')
            ->where('shopkeeper_id', $_POST["id"])
            ->update([$coloumn => $_POST["editval"]]);
           
           
     }
}
?>