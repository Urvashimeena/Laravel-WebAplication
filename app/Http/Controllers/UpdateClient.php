<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UpdateClient extends Controller
{
    public function search_s()
    {
            
             parse_str(file_get_contents("php://input"), $_POST);
             $str=$_REQUEST["str1"];
          
         
        $clients=  DB::select("select * from client_registeration where lower(username) like '%$str%'");
        // return Redirect::route('/Clientinfo')->with($clients);
          return view('pages.Clientlist1',['clients'=>$clients]);
      
             
               
       // return $clients;
         //return view('pages.Clientlist')->with('clients',$client);
      
       
    }
  
    public function update()
    {    

        $coloumn=$_POST["column"];
          DB::table('client_registeration')
            ->where('client_id', $_POST["id"])
            ->update([$coloumn => $_POST["editval"]]);
          
      
    }
     public function delete()
    {    
          $id=$_POST["id"];
          
          DB::table('client_registeration')->where('client_id', '=', $id)->delete();
         
      
    }
   
}
