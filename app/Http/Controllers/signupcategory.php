<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;
use DB;
use Cookie;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class signupcategory extends Controller
{
    public function signup()
    {
        $category=DB::select('select * from shop_category');
          
        return view('pages.signup',['category'=>$category]);
        
        
    }
    public function register(Request $request)
    {
                 $name=$request->input('name');
                 $pass=$request->input('password');
                 $email=$request->input('email');
                 $shop_name=$request->input('shopname');
                 $number=$request->input('number');
                 $imagename = Input::file('image')->getClientOriginalName(); // $imagename->encode('jpg', 75);
             
                 
                  Input::file('image')->move("upload/$name", $imagename);


                 $shopimage = Input::file('shopimage')->getClientOriginalName();
              
                        Input::file('shopimage')->move("upload/$name", $shopimage);

                $identityimage = Input::file('identityimage')->getClientOriginalName();
              
                 Input::file('identityimage')->move("upload/$name", $identityimage);


                $gender=$request->input('gender');
                $category=$request->input('category');

                $rand= rand(6,10);
                $shopcode=$shop_name.$rand."shopovia";

                $openingtime=$request->input('openingtime');
                $closingtime=$request->input('closingtime');
                $date=$request->input('date');
                $shop_address=$request->input('shop_address');
                $landmark=$request->input('landmark');
                
                
                DB::insert("INSERT INTO `shopkeeper_registeration`(`shop_code`, `shopkeeper_name`, `shopkeeper_image`, `shopkeeper_number`, `shopkeeper_email`, `shopkeeper_password`, `shop_category`, `shop_address`, `shop_landmark`, `shop_name`, `shop_image`, `gender`, `shopkeeper_identity`, `openingtime_shop`, `closingtime_shop`, `date_of_registeration`) 

                    VALUES ('$shopcode','$name','$imagename','$number','$email','$pass','$category','$shop_address','$landmark','$shop_name','$shopimage','$gender','$identityimage','$openingtime','$closingtime','$date')");
              return redirect()->action('Shopkeepersession@storeSessionData',['name' => $name]);
          
        
       
    }
    public function login(Request $request)
    {
        echo $shop_code=$request->input('shop_code');
      
        echo $password=$request->input('password');
        $request->session()->put('islogin',true);
        
        $query= DB::select("select * from shopkeeper_registeration where shop_code='$shop_code' and shopkeeper_password='$password'");
       foreach ($query as $p) 
       {
           $name=$p->shopkeeper_name;
       }
        
        echo $count=count($query)."<br>";
        echo $rm=$request->input('checkbox');

        if(isset($rm))
        {
          echo "dd";
            // Cookie::queue("shop_code", $shop_code, time()+60*60*24*30);
            // Cookie::queue("password", $password,time()+60*60*24*30);
            Cookie::queue("shop_code", $shop_code,60*24);
            Cookie::queue("password", $password,60*24);
            // Cookie::forget('shop_code');
            // Cookie::forget('password');
            // setcookie("shop_code", $shopcode,time()+60*60*24*30);
            // setcookie("password", $password,time()+60*60*24*30);

            
        }
        else
        {
          echo "ss";
           // Cookie::queue("shop_code", $shop_code,0);
           //  Cookie::queue("password", $password,0);


          Cookie::queue("shop_code", null ,-1);
          Cookie::queue("password", null ,-1);
           Cookie::queue(Cookie::forget('shop_code'));
             Cookie::forget("shop_code");
            Cookie::forget("password");
           

        } 
        
        if($count>0)
        {
            return redirect()->action('Shopkeepersession@storeSessionData',['name' => $name,'shop_code'=>$shop_code]);
        }
        else
        {
            return redirect()->action('redirect@category');
            
        }
    }
}
