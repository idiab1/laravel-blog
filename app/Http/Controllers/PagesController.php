<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getabout(){
        return view('about');
    }
    public function getcontact(){
        return view('contact');
    }
}
