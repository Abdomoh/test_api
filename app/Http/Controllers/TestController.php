<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use DB;

class TestController extends Controller
{
    //
    public function show()
    {
    	$doc=DB::table('documents')->join('users','documents.user_id','=','users.id')->select('documents.name','users.email')->get();
    	return response()->json($doc);
    }

     public function store(Request $request)
    {

    	//return $request;
    	$doc=Document::create([
    		'name'=>$request->name,
    		'user_id'=>$request->user_id,
    ]);
    	
    	return $doc;

    
    }
}
