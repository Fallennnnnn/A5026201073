<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm()
    {
        //code untuk meload data yang ada diform
        return view('smallnumfinder');

    }
    function smallnumRes() {
        //code untuk meload data yg akan dimuat di form
        return view('res');
    }
    function etsForm(){
        return view('etsform');
    }

}

