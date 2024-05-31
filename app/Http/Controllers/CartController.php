<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = DB::table('MASTER')->where('ID_Produk', $request->product_id)->first();

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found.']);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$product->ID_Produk])) {
            $cart[$product->ID_Produk]['quantity']++;
        } else {
            $cart[$product->ID_Produk] = [
                "name" => $product->Nama_Produk,
                "quantity" => 1,
                "price" => $product->Harga,
                "image" => $product->Image
            ];
        }

        session()->put('cart', $cart);

        return response()->json(['success' => true, 'cart' => $cart, 'message' => 'Product added to cart successfully!']);
    }

    public function showCart()
{
    $cart = session()->get('cart', []);
    $subtotal = array_reduce($cart, function ($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);
    $total = $subtotal; // Add any other charges to total if needed
    return view('cart', compact('cart', 'subtotal', 'total'));
}
}
