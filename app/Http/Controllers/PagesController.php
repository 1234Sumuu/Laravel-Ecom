<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//use App\Product;

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
        $products = Product::orderBy('id', 'desc')->get();
        return view('pages.product.index')->with('products', $products);
    }
}