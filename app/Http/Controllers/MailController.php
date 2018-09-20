<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller 
{
   public function contact(Request $request)
  {   
          $email=$request->input('email');
        $name=$request->input('name');
         $message=$request->input('message');

       $data = array('name'=>$name,'email'=>$email,'message'=>$message);
    
       Mail::send(['text'=>'mail'], ['data'=>$data], function($message) use ($data)
      {
     
         $message->to('urvashimeena1998@gmail.com',$data['message'])->subject
            ('Feedback');
         $message->from($data['email'], $data['name']);
      });
       

        return redirect()->action('Shopkeepersession@contact');
     

  }
  public function forget(Request $request)
  {

       $email=$request->input('email');
       $query=DB::select("select * from shopkeeper_registeration where shopkeeper_email='$email'");

       foreach ($query as $value) 
       {
            $password=$value->shopkeeper_password;
            $name=$value->shopkeeper_name;
       }

       $data = array('name'=>$name,'email'=>$email,'password'=>$password);

      Mail::send(['text'=>'forgetmail'], ['data'=>$data], function($message) use ($data)
      {
     
         $message->to($data['email'],"password")->subject
            ('Feedback');
         $message->from('urvashimeena1998@gmail.com','Urvashi Meena');
      });
       return redirect()->action('Shopkeepersession@login');

  }

}