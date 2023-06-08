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

    // Adding data
    public function store(Request $request) {
        $validasi = $request->validate([
            'nama' => "required",
            'harga' => "required|numeric",
            'desc' => "required",
        ]);

        $products = Product::create($validasi);

        return response()->json([
            "message" => "Berhasil menambah",
            "status" => 200,
            "products" => $products
        ]);
    } 
}
