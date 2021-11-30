<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $req)
    {
        return view('index');
    }
    public function contact(Request $req)
    {
        return view('contact');
    }
}