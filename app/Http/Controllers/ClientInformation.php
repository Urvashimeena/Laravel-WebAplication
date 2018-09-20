<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Paginator;
//use Illuminate\Pagination\LengthAwarePaginator;
//use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ClientInformation extends Controller
{
    public function index()
    {
      
     
      $clients = DB::table('client_registeration')->paginate(2);
      // $clients=[];
       $image=DB::select("select * from admin");
     //$clients = DB::select('select * from client_registeration')->simplePaginate(1);
       //count($clients);
    //  $no=2;
      //$pages=new Paginator($clients,$no );
      // $totalItems= count($clients);
     // $pages= new LengthAwarePaginator($clients,count($clients), 3);
    // $pages = Paginator::make($clients, $totalItems, 3);
     //   $pages = new Paginator($clients, $totalItems,4);
     //return view('pages.Clientlist',['clients'=>$clients])-> with(['pages'=>$pages]);
    // return view('pages.Clientlist',['clients'=>$clients]);
      return view('pages.Clientlist', compact('clients','image'));
     }
}

