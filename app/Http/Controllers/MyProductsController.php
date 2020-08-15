<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Payment;
use Illuminate\Http\Request;

class MyProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Payment::query()
            ->with('payable')
            ->paidBy($request->user())
            ->success()
            ->get()
            ->map->payable;

        return view('my-products')
            ->with('products', $products);
    }
}
