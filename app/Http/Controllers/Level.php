<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Level extends Controller
{
    //
    function carakan1()
    {
        return view('\modul\berlevel\carakan1');
        //code untuk meload data
    }

    function carakan2()
    {
        return view('\modul\berlevel\carakan2');
        //code untuk meload data
    }

    function sandhangan1()
    {
        return view('\modul\berlevel\sandhangan1');
        //code untuk meload data
    }

    function sandhangan2()
    {
        return view('\modul\berlevel\sandhangan2');
        //code untuk meload data
    }

    function pasangan1()
    {
        return view('\modul\berlevel\pasangan1');
        //code untuk meload data
    }

    function pasangan2()
    {
        return view('\modul\berlevel\pasangan2');
        //code untuk meload data
    }
}
