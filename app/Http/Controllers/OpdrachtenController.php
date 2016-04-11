<?php

namespace App\Http\Controllers;

use DB;

use Request;

use App\Opdrachten;
use App\Http\Requests;

class OpdrachtenController extends Controller
{
	public function index()
	{
		$opdrachten = DB::table('opdrachten')->get();
		return view('opdrachten.index',compact('opdrachten'));
	}
  public function create()
  {
   	return view('opdrachten.create');
  }
  /**
  * Store a newly created resource in storage.
  *
  * @return Response
  */
  public function store()
  {
   	$opdracht=Request::all();
    Opdrachten::create($opdracht);
    return $opdracht;
  }
  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return Response
  */
  public function show($id)
  {
    $opdracht=Opdrachten::find($id);
    return view('opdrachten.show',compact('opdracht'));	
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return Response
  */
  public function edit($id)
  {
   	$opdracht=Opdrachten::find($id);
    return view('opdrachten.edit',compact('opdracht'));
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
    $opdracht=Opdrachten::find($id);
    $opdracht->update($input);
    return redirect('opdrachten'); 	
  }
  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return Response
  */
   public function destroy($id)
  {
    Opdrachten::find($id)->delete();
    return redirect('opdrachten');
  }
}