<?php

namespace App\Http\Controllers;

use App\Product;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();

        return view('landing.home')->with('products', $products);
    }
    public function about(){
        return view('shopping.pages.about');
       }
   
       public function contact(){
        return view('shopping.pages.contact');
       }

    
}
