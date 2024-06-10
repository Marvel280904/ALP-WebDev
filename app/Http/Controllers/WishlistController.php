<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWish(Request $request)
    {
        $product = DB::table('MASTER')->where('ID_Produk', $request->product_id)->first();

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found.']);
        }

        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$product->ID_Produk])) {
            $wishlist[$product->ID_Produk]['quantity']++;
        } else {
            $wishlist[$product->ID_Produk] = [
                "name" => $product->Nama_Produk,
                "quantity" => 1,
                "price" => $product->Harga,
                "image" => $product->Image
            ];
        }

        session()->put('wishlist', $wishlist);

        return response()->json(['success' => true, 'wishlist' => $wishlist, 'message' => 'Product added to wishlist successfully!']);
    }

    public function showWish()
    {
        $wishlist = session()->get('wishlist', []);
        $subtotal = array_reduce($wishlist, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
        $total = $subtotal; // Add any other charges to total if needed

        return view('wishlist', compact('wishlist'));
    }

    

}


