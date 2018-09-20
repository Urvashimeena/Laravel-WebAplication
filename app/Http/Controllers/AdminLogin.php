<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Routing\Controller;

class AdminLogin extends Controller
{
    public function login(Request $request)
    {
        $name=$request->input('username');
        $password=$request->input('password');
        DB::select('select * from admin where username= ?',[$name]);
        
    }
    public function subadmin(Request $request)
    {
        $query=DB::select("select * from admin");
        
        return view('pages.subadmin',['image'=>$query]);
    }
    public function register(Request $request) 
    {
        $query=DB::select("select * from admin");
        $username=$request->input('email');
        $pass=$request->input('pass');
        $date=$request->input('date');
        $role=$request->input('role');
        $query1=DB::insert("INSERT INTO `subadmin`(`Username`, `password`, `role`, `create_date`) VALUES ('$username','$pass','$role','$date')");
        return view('pages.subadmin',['image'=>$query]);
    }
    public function subadminlist(Request $request) 
    {
        $query=DB::select("select * from admin");
        $query1=DB::select("select * from subadmin");
        
        return view('layout.Mastersubadminlist',['image'=>$query,'clients'=>$query1]);
    }
    public function updaterole(Request $request)
    {
        $coloumn=$_POST["column"];
        
          DB::table('subadmin')
            ->where('Registeration_id', $_POST["id"])
            ->update([$coloumn => $_POST["editval"]]);
    }
     public function delete()
    {    
          $id=$_POST["id"];
          
          DB::table('subadmin')->where('Registeration_id', '=', $id)->delete();
         
      
    }
}
