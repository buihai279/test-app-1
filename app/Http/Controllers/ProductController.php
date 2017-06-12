<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\CheckRole;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(CheckRole::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->orderBy('updated_at', 'DESC')->paginate(5);

        return view('product.index', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $file = $request->file('filePhoto');
        $fileName = date('Y-m-d', time()).'-n'.rand(0, 100).'-'.$file->getClientOriginalName();
        $path = 'uploads';
        $file->move($path, $fileName);
        
        $newProduct = new Product();
        $newProduct->name = $request->txtNameProduct;
        $newProduct->description = $request->txtDescription;
        $newProduct->photo = $request->inputFile;
        $newProduct->price = $request->txtPrice;
        $newProduct->photo = $fileName;

        $request->session()->flash('status-success', 'Product was insert successful!');
        $newProduct->save();
        $id=$newProduct->id;
        $request->session()->flash('active-id', $id);

        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        if (isset($id)) {
            $product = Product::find($id);

            $file = $request->file('filePhoto');
            if ($file != null) {
                $fileName = date('Y-m-d', time()).'-'.rand(0, 100).'-'.$file->getClientOriginalName();
                $path = 'uploads';
                $file->move($path, $fileName);
                $product->photo = $fileName;
            }

            $product->name = $request->txtNameProduct;
            $product->description = $request->txtDescription;
            $product->price = $request->txtPrice;

            $product->save();
            $request->session()->flash('active-id', $id);

            return redirect()->route('product.index')->with('status-success', 'Product was update successful!');
        }

        return redirect()->route('product.index')->with('status-error', 'Error!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Product::find($id)->photo;
        unlink('uploads/'.$photo);
        DB::table('products')->where('id', '=', $id)->delete();

        return redirect()->route('product.index')->with('status-success', 'Product was delete successful!');
    }
}
