<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->paginate(6);

        return view('home', ['products' => $products]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product == null) {
            return redirect('/')->with('status-error', 'Product not found');
        }

        return view('detail', ['product' => $product]);
    }
}
