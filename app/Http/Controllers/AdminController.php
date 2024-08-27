<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function index()
    {
        // access data from data
        $products = Product::all();
        // dd($products);
        return view('Dashboard.index',[
            'products' =>  $products
        ]);
    }



}
