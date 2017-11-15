<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use App\Workshop;
use Session;
use Illuminate\Support\Facades\Input;

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

  	 
    $workshop->name = $request->name;
    $workshop->competences_id = '2';
    $workshop->description = $request->description;
    $workshop->length = $request->length;
    $workshop->participants = $request->participants;
    $workshop->application = $request->application;
    $workshop->imageUrl = $request->image;
    $workshop->save();

    Session::flash('message', 'Workshop aangemaakt!');


  }
}
