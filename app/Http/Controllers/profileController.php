<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;

class profileController extends Controller
{
    public function index() { 
        $id = auth()->user()->id;

	$profile= profile::find($id);

	return view('profile\profile', ['profile' => $profile]); 

}
    
    }

