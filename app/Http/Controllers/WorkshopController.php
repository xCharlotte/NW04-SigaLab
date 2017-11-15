<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use App\Workshop;
use Session;

class WorkshopController extends Controller
{
	public function index()
  {
    $workshops = Workshop::all();
    return view('workshops.index', compact('workshops'));
  }

  public function create_workshop_form()
  {
    return view('workshops.create');
  }

  public function create(Request $request)
  {
  	$workshop = new Workshop(); 
  	  $this->validate($request, [
			'name'    			=> 'required|max:30',
			'description'   => 'required',
			'length'    		=> 'required',
			'participants'  => 'required',
			'application'   => 'required|max:100',
			//'file'      		=> 'required|mimes:jpeg,jpg,png|max:1000',
		]);
  	 
    $workshop->name = $request->name;
    $workshop->competences_id = '2';
    $workshop->description = $request->description;
    $workshop->length = $request->length;
    $workshop->participants = $request->participants;
    $workshop->application = $request->application;
    $workshop->imageUrl = $request->file;
    $workshop->save();

    Session::flash('message', 'Workshop aangemaakt!');
    return redirect()->route('workshops');


  }
}
