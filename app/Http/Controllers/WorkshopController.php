<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use User;
use App\Workshop;
use Session;
use Illuminate\Support\Facades\Storage;

class WorkshopController extends Controller
{
	public function index()
  {
    $workshops = Workshop::all();

    $id = Auth::id();
    if($id > 0){
      return view('admin.workshops.index', compact('workshops'));
    }else{
      return view('workshops.index', compact('workshops'));
    }

  }

  public function create_workshop_form()
  {
    return view('admin.workshops.create');
  }

  public function update_workshop_form($id)
  {
    $workshop = Workshop::findOrFail($id);
    return view('admin.workshops.update', compact('workshop'));
  }

  public function read($id)
  {
    $workshop = Workshop::findOrFail($id);
    return view('workshops.read', compact('workshop'));
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
			'file'      		=> 'required|mimes:jpeg,jpg,png|max:1000',
		]);

    if($request->hasFile('file'))
    {
      $request->file('file');
      $path = $request->file->store('storage/uploads','public');
    }  
  	 
    $workshop->name = $request->name;
    $workshop->competences_id = '2';
    $workshop->description = $request->description;
    $workshop->length = $request->length;
    $workshop->participants = $request->participants;
    $workshop->application = $request->application;
    $workshop->imageUrl = $path;
    $workshop->save();

    Session::flash('message', 'Workshop aangemaakt!');
    return redirect()->route('workshops');

  }

  public function update(Request $request)
  {
    // $workshop = new Workshop(); 
    
    $this->validate($request, [
      'name'          => 'required|max:30',
      'description'   => 'required',
      'length'        => 'required',
      'participants'  => 'required',
      'application'   => 'required|max:100',
      'file'          => 'required|mimes:jpeg,jpg,png|max:1000',
    ]);

    if($request->hasFile('file'))
    {
      $request->file('file');
      $path = $request->file->store('storage/uploads','public');
    }

    $id = $request->id;
    $workshop = Workshop::find($id); 
    $workshop->name = $request->name;
    $workshop->competences_id = '2';
    $workshop->description = $request->description;
    $workshop->length = $request->length;
    $workshop->participants = $request->participants;
    $workshop->application = $request->application;
    $workshop->imageUrl = $path;
    $workshop->save();

    Session::flash('message', 'Workshop gewijzigd!');
    return redirect()->route('workshops');

  }

  public function delete($id){
    $workshop = Workshop::find($id);
    $workshop->delete();

    // redirect
    Session::flash('message', 'Workshop verwijderd!');
    return redirect()->route('workshops');
  }
}
