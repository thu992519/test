<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    function sitepage () {

        return view('site/site');
    }
}
