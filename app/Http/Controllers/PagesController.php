<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $req)
    {
        return view('pages.index');
    }
    public function contact(Request $req)
    {
        return view('pages.contact');
    }
    public function products(Request $req){
        return view('pages.product.index');
    }
}