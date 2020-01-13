<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gate;


class HomeController extends Controller
{
    //
    /**
     * Create a new controller instance.
     
     * @return void
     */
   /**  public function __construct()
    {
        $this->middleware('auth');

    }*/
   /** public function index(){
       
        return view('pages.index', compact('title'));
      }
    */
    public function home(){

       //if(!Gate::allows('customer')){
          //  abort(404, "Sorry, you cannot do this action");
   //  }
     //  $inventory = inventory::all();
     
        return view('pages.home', compact('title'));
        
    }   
}
