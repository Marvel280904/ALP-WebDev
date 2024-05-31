<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the MASTER table and paginate with 9 products per page
        $products = DB::table('MASTER')->paginate(9);

        // Pass the products to the view
        return view('product', compact('products'));
    }
}
