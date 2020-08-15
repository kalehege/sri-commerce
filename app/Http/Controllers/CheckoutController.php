<?php

namespace App\Http\Controllers;

use ApiChef\PayHere\Payment;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show(Product $product, Request $request)
    {
        $payment = Payment::make($product, $request->user(), $product->price);

        return view('checkout')
            ->with('payment', $payment);
    }

    public function success(Request $request)
    {
        $payment = Payment::findByOrderId($request->get('order_id'));

        /** @var Product $product */
        $product = $payment->payable;

        $product->decrement('items_available');

        return redirect()
            ->route('my-products')
            ->with('success', true);
    }

    public function cancelled(Request $request)
    {
        return redirect()
            ->route('my-products')
            ->with('cancelled', true);
    }
}
