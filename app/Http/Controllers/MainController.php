<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index()
    {$allProducts = product::all();
        $newArrival = product::where('type', 'new-arrivals')->get();
        $hotSale = product::where('type', 'sale')->get();
        return view('index', compact('allProducts', 'hotSale', 'newArrival'));}

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function shop()
    {
        return view('shop');
    }

    public function singleProduct($id)
    {$product = product::find($id);
        return view('singleProduct', compact('product'));}

    public function addToCart(Request $data)
    {
        if (session()->has('id')) {
            $item = new Cart();
            $item->quantity->$data->input('quantity');
            $item->productId->$data->input('id');
            $item->customerId = session()->get('id');
            $item->save();
            return redirect()->back()->with('success', 'Congragulations! Item added into cart');
        } else {
            return redirect('login')->back()->with('error', 'Info! Please Login to System');

        }


    }
    public function register()
    {
        return view('register');
    }


}
