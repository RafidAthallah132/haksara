<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Quiz extends Controller
{
    //
    function carakan1()
    {
        return view('\Quiz\carakan1');
        //code untuk meload data
    }

    function carakan2()
    {
        return view('\Quiz\carakan2');
        //code untuk meload data
    }

    function aksaraangka()
    {
        return view('\Quiz\aksaraangka');
        //code untuk meload data
    }

    function aksaramurda()
    {
        return view('\Quiz\aksaramurda');
        //code untuk meload data
    }

    function sandhangan1()
    {
        return view('\Quiz\sandhangan1');
        //code untuk meload data
    }

    function sandhangan2()
    {
        return view('\Quiz\sandhangan2');
        //code untuk meload data
    }

    function aksaraswara()
    {
        return view('\Quiz\aksaraswara');
        //code untuk meload data
    }

    function pasangan1()
    {
        return view('\Quiz\pasangan1');
        //code untuk meload data
    }

    function pasangan2()
    {
        return view('\Quiz\pasangan2');
        //code untuk meload data
    }
}
