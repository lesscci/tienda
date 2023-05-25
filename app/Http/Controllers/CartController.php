<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []);
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $cartItems = session('cart', []);
        $cartItems[] = $productId;
        session(['cart' => $cartItems]);

        return redirect()->route('cart.index');
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');

        $cartItems = session('cart', []);
        $index = array_search($productId, $cartItems);
        if ($index !== false) {
            unset($cartItems[$index]);
        }
        session(['cart' => $cartItems]);

        return redirect()->route('cart.index');
    }

}
