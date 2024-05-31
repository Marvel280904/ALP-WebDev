<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product; // Make sure this path matches your Product model

class DetailProductController extends Controller
{
    public function show($id)
    {
        // Retrieve the product by ID
        $product = DB::table('MASTER')->where('ID_Produk', $id)->first();

        // If the product is not found, abort with a 404 error
        if (!$product) {
            abort(404);
        }

        // Return the product detail view with the product data
        return view('ProductDetail', compact('product'));
    }
}
