<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemController extends Controller
{


    public function index(Request $request){
    	$item =Items::all();
        return view('item'  , compact('item'));
    }
    public function add(Request $request){
    	
    	  $this->validate($request, [
            'name'    =>  'required|unique:items',
          
        ]);
    	$item = new Items ([
            'name'  =>  $request->get('name')
          
        ]);

    	$item->save();

        return redirect()->back()->with('success', 'Data Added');
    }
}
