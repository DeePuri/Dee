<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['menu', 'index', 'contact', 'login', 'resgister', 'reservation', 'ims_help']]);
    }
    public function index(){
       
      return view('pages.index', compact('title'));
    }
    
    public function contact(){
       
        return view('pages.contact', compact('title'));
    }
    

    public function menu(){
      
        return view('pages.menu', compact('title'));
    }
   // public function inventory(){
     
        //return view('pages.inventory', compact('title'));
        
   // }

    public function reservation(){
     
        return view('pages.reservation', compact('title'));
    }
    public function ims_help(){
     
        return view('pages.ims_help', compact('title'));
    }

    
}
