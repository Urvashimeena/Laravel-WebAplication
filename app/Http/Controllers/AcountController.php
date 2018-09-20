<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AcountController extends Controller
{
    public function login(Request $request) {
   
     $data = Input::all();
   
    $rules = array(
		'email' => 'required',
		'password' => 'required',
	     );
    $validator = Validator::make($data, $rules);
    if ($validator->fails()){
    // echo "<script>alert('mm');</script>";
     return Redirect::to('/Admin_logi')->withInput(Input::except('password'))->withErrors($validator);
    }
    else {
      $userdata = array(
		    'email' => Input::get('email'),
		    'password' => Input::get('password')
                  );
                /* foreach ($userdata as $userdata => $user) 
                  {
                      echo $user;
                  }*/
     // if (Auth::validate($userdata)) {
        if (Auth::attempt($userdata))
        {
          $query=DB::select("select * from admin");
          foreach ($query as $value)
          {
              $name=$value->email;
              $request->session()->put('admin_name',$name);
              $request->session()->put('islog',true);

          }
          return Redirect::intended('/Admin_panel');
          
        }
        else
        {
            return Redirect::intended('/Admin_login');
        }
   //   } 
     
      //else {
       
       // Session::flash('error', 'Something went wrong'); 
        //return Redirect::to('Admin_login');
      //}
    }
  }
  public function logout(Request $request)
  {
    $request->session()->forget('admin_name');
    
    
    return redirect('/Admin_login');
  }
  
  public function updateprofile(Request $request)
  {
      
      
     $image = Input::file('image')->getClientOriginalName();
     
     Input::file('image')->move("upload/admin", $image);
     
          DB::table('admin')
            ->where('id',3 )
            ->update(['profile' =>$image]);
          $query=DB::select("select * from admin");
         return view('pages.adminindex',['image'=>$query]);
  }
  public function panel(Request $request) 
  {
      
      $query=DB::select("select * from admin");
      $query1=DB::select("select * from client_registeration");
      $client=count($query1);
      $query3=DB::select("select * from shopkeeper_registeration");
      $shopkeeper=count($query3);
      $request->session()->put('client',$client);
      $request->session()->put('shopkeeper',$shopkeeper);
      return view('pages.adminindex',['image'=>$query]);
      

     
  }
  // public function sublogin(Request $request)
  // {
  //   $user=$request->input('user');
  //   $pass=$request->input('pass');

  //   $query4=DB::select("select * from subadmin where username='$user' and password='$pass'");
  //   $count=count($query4);
  //   if($count>0)
  //   {
  //         $request->session()->put('islog1',true);
  //         return Redirect::intended('/Admin_panel');
  //   }
  //   else
  //   {
      
  //      return view('pages.subadminlogin');
  //   }



  // }
}

