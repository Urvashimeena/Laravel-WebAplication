<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionClientRegisteration extends Controller
{
      public function accessSessionData(Request $request)
      {
      
      if($request->session()->has('client_name'))
      {   $client_name=$request->session()->get('client_name');
           $isLogin=$request->session()->get('isLogin');
          echo 'No ';
      }
      else
         echo 'No data in the session';
     }
    public function storeSessionData(Request $request)
        {
           $name=$request->get('name');
           $request->session()->put('client_name',$name);
           $request->session()->put('modal','modal');
           $request->session()->put('isLogin',TRUE);
           $request->session()->put('login','login successfully!!!');
           $request->session()->forget('not');       
           
            return redirect('/');
        }
        public function deleteSessionData(Request $request){
          
           $request->session()->forget('client_name');
           $request->session()->forget('modal');
           $request->session()->forget('isLogin');
           $request->session()->forget('login');
           $request->session()->forget('not');
          return redirect('/');
        }
        public function storeSessionDat(Request $request)
        {
            $request->session()->put('not','Useraname And Password Are Not Correct!!');
            
            return redirect('');
        }
}