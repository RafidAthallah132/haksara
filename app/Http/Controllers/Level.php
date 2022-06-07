<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Level extends Controller
{
    //
    function carakan1()
    {
        return view('\modul\level\carakan1');
        //code untuk meload data
    }

    function carakan2()
    {
        return view('\modul\level\carakan2');
        //code untuk meload data
    }

    function sandhangan1()
    {
        return view('\modul\level\sandhangan1');
        //code untuk meload data
    }

    function sandhangan2()
    {
        return view('\modul\level\sandhangan2');
        //code untuk meload data
    }

    function pasangan1()
    {
        return view('\modul\level\pasangan1');
        //code untuk meload data
    }

    function pasangan2()
    {
        return view('\modul\level\pasangan2');
        //code untuk meload data
    }
}
