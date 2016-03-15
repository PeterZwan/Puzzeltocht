<?php

namespace App\Http\Controllers;

use DB;

use Request;

use App\Tochten;
use App\Http\Requests;

class TochtenController extends Controller {
   
   public function index()
   {
     $tochten = DB::table('tochten')->get();
     return view('tochten.index',compact('tochten'));
	}
   public function create()
   {
   	 return view('tochten.create');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
   	$tocht=Request::all();
   	Tochten::create($tocht);
   	return redirect('tochten');
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
    
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      
   }
}

