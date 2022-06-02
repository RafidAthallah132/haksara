<?php

namespace App\Http\Controllers;

use App\Http\Requests\profile\updateprofilerequest;
use Illuminate\Http\Request;
use App\profile;

class profileController extends Controller
{
    public function index() { 
        $id = auth()->user()->id;

	$profile= profile::find($id);

	return view('profile\profile', ['profile' => $profile]); 

}

    public function edit($id){
        $data = profile::find($id);
        return view('profile.edit',['data' => $data]);
    }

    public function update(request $request){
      $data= profile::find($request->id);
      $data->name=$request->name;
      $data->description=$request->description;
      $data -> save();
      return view('profile\profile', ['profile' => $data]);
    }
    
    }

