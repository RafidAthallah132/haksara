<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modul extends Controller
{
    //
    function carakan()
    {
        return view('\modul\carakan');
        //code untuk meload data
    }

    function aksaraangka()
    {
        return view('\modul\aksaraangka');
        //code untuk meload data
    }

    function aksaramurda()
    {
        return view('\modul\aksaramurda');
        //code untuk meload data
    }

    function sandhangan()
    {
        return view('\modul\sandhangan');
        //code untuk meload data
    }

    function aksaraswara()
    {
        return view('\modul\aksaraswara');
        //code untuk meload data
    }

    function pasangan()
    {
        return view('\modul\pasangan');
        //code untuk meload data
    }
}
