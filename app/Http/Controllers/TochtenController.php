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
      $tocht=tochten::find($id);
      return view('tochten.show',compact('tocht'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
   	  $tocht=tochten::find($id);
      return view('tochten.edit',compact('tocht'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
     $input=Request::all();
     $tocht=tochten::find($id);
     $tocht->update($input);
     return redirect('tochten');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      Tochten::find($id)->delete();
      return redirect('tochten');
   }
}

