<?php

namespace App\Http\Controllers;

class MyProductsController extends Controller
{
    public function index()
    {
        $products = collect();

        return view('my-products')
            ->with('products', $products);
    }
}
