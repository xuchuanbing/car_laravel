<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('Home\index');
    }



    public function buyers()
    {
        return view('Home\buyers');
    }



    public function buyers2()
    {
        return view('Home\buyers2');
    }

    public function details()
    {
        return view('Home\details');
    }

     public function fuwubozhang()
    {
        return view('Home\fuwubozhang');

    }

      public function fenqi()
    {
        return view('Home/fenqi');

    }

    

     public function guyuwomeng()
    {
        return view('Home/guyuwomeng');

    }

     public function jaru()
    {
        return view('Home/jaru');

    }

     public function pinggushi()
    {
        return view('Home/pinggushi');

    }

     public function seller()
    {
        return view('Home/seller');

    }

     public function shouye()
    {
        return view('Home/shouye');

    }

     public function wenda1()
    {
        return view('Home/wenda1');

    }

     public function wenda2()
    {
        return view('Home/wenda2');

    }

     public function wenda3()
    {
        return view('Home/wenda3');

    }

}