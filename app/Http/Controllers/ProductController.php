<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Getting all data
    public function index() {
        $products = Product::all();

        return response()->json([
            "message" => "Berhasil",
            "status" => 200,
            "products" => $products
        ]);
    }
}
