<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Inventory;
use Gate;

class InventoryController extends Controller
{
    //
    /**
     * Create a new controller instance.
     
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function inventory(){
//access conrol
    /**if(!Gate::allows('0')){
           abort(404, "Sorry, you cannot do this action");
     }
     $inventory = inventory::all();
     */
        return view('inventory', compact('title'));
        
    }   
    
}
