<?php


namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class Addproduct extends Controller
{
        public function insertpurchase(Request $request)
        {
             $category="dicount on purchase";
//            $shop_code=$request->input('shop_code');
              $shop_code=Input::get('shop_code');
               echo $type=$request->input('typeoffer');
               $count=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
               
               if(count($count)<6)
               {    
               
                if($type=="mega")
                {
                        $query=DB::insert("INSERT INTO `shopkeeper_megaoffer`(`shop_code`, `advertisement_category`) VALUES ('$shop_code','$category')");
            
                        $query1=DB::select("select * from shopkeeper_megaoffer where shop_code='$shop_code'");

                         $count= count($query1);
          
                        if($count>0)
                        {
                            foreach($query1 as $p)
                            {
                                $id=$p->mega_id;
                            }
                              $name=$request->input('name');
                              $product_name=$request->input('product');
                              $start_date=$request->input('stardate');
                               $end_date=$request->input('enddate');
                              $actual_price=$request->input('actualprice');
                              $discount=$request->input('discount');
                              $description=$request->input('description');
                              $produt_type=$request->input('type');
                              $selling=($actual_price-($actual_price*$discount/100));
                              $productimage = Input::file('image')->getClientOriginalName();
                              Input::file('image')->move("upload/$name/product", $productimage);


                             DB::insert(" INSERT INTO shopkeeper_productinfo(`advertisement_category`,`selling_price`, `shopkeeper_id`, `shop_code`, `actual_price`, `discount`, `product_name`, `description`, `product_image`,`product_type`, `start_date`, `end_date`)
                                     VALUES ('$category','$selling','$id','$shop_code','$actual_price','$discount','$product_name','$description',"
                                      . "'$productimage','$produt_type','$start_date','$end_date')");

                               return redirect()->action('redirect@product',['shop_code'=>$shop_code]);   
                        }
                }
                elseif($type=="normal")
                {
                        $query=DB::insert("INSERT INTO `shopkeeper_advertisement`(`shop_code`, `advertisement_category`) VALUES ('$shop_code','$category')");
            
                        $query1=DB::select("select * from shopkeeper_advertisement where shop_code='$shop_code'");

                        $count= count($query1);
          
                        if($count>0)
                        {
                            foreach($query1 as $p)
                            {
                                $id=$p->shopkeeper_id;
                            }
                              $name=$request->input('name');
                              $product_name=$request->input('product');
                              $start_date=$request->input('stardate');
                              echo $end_date=$request->input('enddate');
                              $actual_price=$request->input('actualprice');
                              $discount=$request->input('discount');
                              $description=$request->input('description');
                              $produt_type=$request->input('type');
                              $selling=($actual_price-($actual_price*$discount/100));
                              echo $productimage = Input::file('image')->getClientOriginalName();
                              Input::file('image')->move("upload/$name/product", $productimage);


                             DB::insert(" INSERT INTO shopkeeper_productinfo(`advertisement_category`,`selling_price`, `shopkeeper_id`, `shop_code`, `actual_price`, `discount`, `product_name`, `description`, `product_image`,`product_type`, `start_date`, `end_date`)
                                     VALUES ('$category','$selling','$id','$shop_code','$actual_price','$discount','$product_name','$description',"
                                      . "'$productimage','$produt_type','$start_date','$end_date')");

                               return redirect()->action('redirect@product',['shop_code'=>$shop_code]);   
                        }
                }
            }
            else
            {
                return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
            }
            
              
        }
        public function discountproduct(Request $request)
        {
             $category="dicount on product";

             $shop_code=Input::get('shop_code');
             
       
               echo $type=$request->input('typeoffer');
        
               $count=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
               
          if(count($count)<6)
          {    
           
                
            if($type=="mega")
           {
                  $query=DB::insert("INSERT INTO `shopkeeper_megaoffer`(`shop_code`, `advertisement_category`) VALUES ('$shop_code','$category')");
            
                $query1=DB::select("select * from shopkeeper_megaoffer where shop_code='$shop_code'");

                 $count= count($query1);
                 
                  if($count>0)
               {
                   foreach($query1 as $p)
                            {
                                $id=$p->mega_id;
                            }
                    
                  $name=$request->input('name');
                  $product_name=$request->input('productname');
                  $start_date=$request->input('startdate');
                  $end_date=$request->input('enddate');
                  $actual_price=$request->input('actualprice');
                  $discount=$request->input('discount');
                  $description=$request->input('description');
                  $produt_type=$request->input('type');
                  $selling=($actual_price-($actual_price*$discount/100));
                  $productimage = Input::file('productimage')->getClientOriginalName();
                  Input::file('productimage')->move("upload/$name/product", $productimage);
                  
                   DB::insert(" INSERT INTO shopkeeper_productinfo(`advertisement_category`,`selling_price`, `shopkeeper_id`, `shop_code`, `actual_price`, `discount`, `product_name`, `description`, `product_image`,`product_type`, `start_date`, `end_date`)
                         VALUES ('$category','$selling','$id','$shop_code','$actual_price','$discount','$product_name','$description',"
                          . "'$productimage','$produt_type','$start_date','$end_date')");
                   
                   $result=DB::select("select * from shopkeeper_productinfo");
                     
                     //return redirect()->action('product',['category'=>$result]);
                     return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
                   
                }
                 
           }
           else
           {
               $query=DB::insert("INSERT INTO `shopkeeper_advertisement`(`shop_code`, `advertisement_category`) VALUES ('$shop_code','$category')");
            
            $query1=DB::select("select * from shopkeeper_advertisement where shop_code='$shop_code'");
            
             $count= count($query1);
             
               if($count>0)
               {
                    foreach($query1 as $p)
                    {
                        $id=$p->shopkeeper_id;
                    }
                    
                  $name=$request->input('name');
                  $product_name=$request->input('productname');
                  $start_date=$request->input('startdate');
                  $end_date=$request->input('enddate');
                  $actual_price=$request->input('actualprice');
                  $discount=$request->input('discount');
                  $description=$request->input('description');
                  $produt_type=$request->input('type');
                  $selling=($actual_price-($actual_price*$discount/100));
                  $productimage = Input::file('productimage')->getClientOriginalName();
                  Input::file('productimage')->move("upload/$name/product", $productimage);
                  
                   DB::insert(" INSERT INTO shopkeeper_productinfo(`advertisement_category`,`selling_price`,`shopkeeper_id`, `shop_code`, `actual_price`, `discount`, `product_name`, `description`, `product_image`,`product_type`, `start_date`, `end_date`)
                         VALUES ('$category','$selling','$id','$shop_code','$actual_price','$discount','$product_name','$description',"
                          . "'$productimage','$produt_type','$start_date','$end_date')");
                   
                   $result=DB::select("select * from shopkeeper_productinfo");
                   
                   //  return redirect()->action('product',['category'=>$result]);
                     return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
               }
           }
       }
       else
       {
           return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
       }
            
                
        }
        
        
        
        
        
        
         public function buyget(Request $request)
        {
             $category="Buy Something Get Something Free";

             $shop_code=Input::get('shop_code');
           
               
               echo $type=$request->input('typeoffer');
               $count=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
               
          if(count($count)<6)
          {    
           
          
             
                if($type=="mega")
                {
                  $query=DB::insert("INSERT INTO `shopkeeper_megaoffer`(`shop_code`, `advertisement_category`) VALUES ('$shop_code','$category')");
            
                $query1=DB::select("select * from shopkeeper_megaoffer where shop_code='$shop_code'");

                $count= count($query1);
               if($count>0)
               {
                   
                    foreach($query1 as $p)
                            {
                                $id=$p->mega_id;
                            }
                    echo $id;
                    
                  $name=$request->input('name');
                  $product_name=$request->input('productname');
                  $start_date=$request->input('startdate');
                  echo $end_date=$request->input('enddate');
                  $buy=$request->input('buy');
                  $get=$request->input('get');
                  $description=$request->input('description');
                  $produt_type=$request->input('type');
                  $discount=($get/$buy)*100;
                  echo $productimage = Input::file('image')->getClientOriginalName();
                  Input::file('image')->move("upload/$name/product", $productimage);
                  
                   DB::insert(" INSERT INTO shopkeeper_productinfo(`advertisement_category`,`discount`, `shopkeeper_id`, `shop_code`,`product_name`, `description`, `product_image`, `buy`, `get`, `product_type`, `start_date`, `end_date`)
                         VALUES ('$category','$discount','$id','$shop_code','$product_name','$description',"
                          . "'$productimage','$buy','$get','$produt_type','$start_date','$end_date')");
                   
                 return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
                }
        }
         
          elseif($type=="normal")
          {
           
               $query=DB::insert("INSERT INTO `shopkeeper_advertisement`(`shop_code`, `advertisement_category`) VALUES ('$shop_code','$category')");
            
                        $query1=DB::select("select * from shopkeeper_advertisement where shop_code='$shop_code'");

                        $count= count($query1);
                if($count>0)
               {
                    foreach($query1 as $p)
                    {
                        $id=$p->shopkeeper_id;
                    }
                    
                  $name=$request->input('name');
                  $product_name=$request->input('productname');
                  $start_date=$request->input('startdate');
                  echo $end_date=$request->input('enddate');
                  $buy=$request->input('buy');
                  $get=$request->input('get');
                  $discount=($get/$buy)*100;
                  $description=$request->input('description');
                  $produt_type=$request->input('type');
                  echo $productimage = Input::file('image')->getClientOriginalName();
                  Input::file('image')->move("upload/$name/product", $productimage);
                  
                   DB::insert(" INSERT INTO shopkeeper_productinfo(`advertisement_category`,`discount`,`shopkeeper_id`, `shop_code`,`product_name`, `description`, `product_image`, `buy`, `get`, `product_type`, `start_date`, `end_date`)
                         VALUES ('$category','$discount','$id','$shop_code','$product_name','$description',"
                          . "'$productimage','$buy','$get','$produt_type','$start_date','$end_date')");
                   
                 return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
                }
          }
          }
        else
        {
                return redirect()->action('redirect@product',['shop_code'=>$shop_code]);
        }
        
        }
        
        public function advertisement(Request $request)
        {
            $shop_code=Session::get('shop_code');
            $meg=DB::select("select * from shopkeeper_megaoffer where shop_code='$shop_code'");
            $mega= count($meg);
            $request->session()->put('mega',$mega);
            $number=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
            $a= count($number);
            $request->session()->put('NumOfProduct',$a);
            $result=DB::select("select * from shopkeeper_productinfo where shop_code='$shop_code'");
         
            $query2=DB::select("select * from shop_category");
            return view('pages.advertisement',['category_list'=>$query2]);
        }
        
        
        
        
        
        
        public function deleteproduct()
        {
              $id=$_POST["id"];
          $query1=DB::select("select * from shopkeeper_productinfo where product_id='$id'");
          foreach($query1 as $p)
                    {
                        $id1=$p->shopkeeper_id;
                    }
          DB::table('shopkeeper_productinfo')->where('product_id', '=', $id)->delete();
          DB::table('shopkeeper_advertisement')->where('shopkeeper_id', '=', $id1)->delete();
           DB::table('shopkeeper_megaoffer')->where('mega_id', '=', $id1)->delete();
        
          
          
          
        }
         public function deleteall()
        {
               $shop_code=Session::get('shop_code');
              
             DB::table('shopkeeper_productinfo')->where('shop_code','=',$shop_code)->delete();
             DB::table('shopkeeper_advertisement')->where('shop_code','=',$shop_code)->delete();
             DB::table('shopkeeper_megaoffer')->where('shop_code','=',$shop_code)->delete();
              
        }
}
