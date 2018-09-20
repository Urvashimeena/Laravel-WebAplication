<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientRegisteration extends Controller
{
   public function register(Request $request)
   {
       
       $name=$request->input('name');
       $password=$request->input('password');
       $number=$request->input('number');
       DB::insert("INSERT INTO client_registeration(username, password, contact_number) values ('$name','$password','$number') ");
     // return redirect('SessionClientRegisteration')->storeSessionData()->with('name',$name);
      return redirect()->action(
    'SessionClientRegisteration@storeSessionData', ['name' => $name]);
   }
   public function login(Request $request)
   {
       $username=$request->input('username');
       $password=$request->input('password');
       
       $result=DB::select("select * from client_registeration where username='$username' and password='$password' ");
      $count= count($result);
       if($count>0)
       {
           return redirect()->action('SessionClientRegisteration@storeSessionData',['name' => $username]);
       }
       else
       {
           return redirect()->action('SessionClientRegisteration@storeSessionDat');
       }
   }
           
}
