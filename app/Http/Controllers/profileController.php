<?php

namespace App\Http\Controllers;

use App\Http\Requests\profile\updateprofilerequest;
use App\Http\Requests\profile\updaterequest;
use Illuminate\Http\Request;
use App\profile;
use Validator;

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

    public function update(updateprofilerequest $request){

        $user = auth()->user();
     $user->update([
        'name' => $request->name,
        'description' => $request->description,

     ]);
     $data= profile::find($request->id);
     $data->description=$request->description;
     $data -> save();

  return redirect()-> back()->with('message', 'Your profile has been updated!');;

    
    }

}

