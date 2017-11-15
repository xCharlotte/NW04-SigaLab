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
    return view('workshops.browse', compact('workshops'));
  }

  public function create_workshop_form()
  {
    return view('workshops.create');
  }

  public function create(Request $request)
  {
    
  }
}
