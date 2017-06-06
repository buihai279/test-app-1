<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Http\Requests\StoreProduct;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $products=DB::;
    	$products= DB::table('products')->paginate(5);
//         dd($products);
        return view('product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        // get file name
        $file = $request->file('filePhoto');
        $fileName=date("Y-m-d",time()).'-'.$file->getClientOriginalName();
        $path = 'uploads';
        $file->move($path, $fileName);
    	$newProduct=new Product();
        $newProduct->name=$request->txtNameProduct;
        $newProduct->description=$request->txtDescription;
        $newProduct->photo=$request->inputFile;
        $newProduct->price=$request->txtPrice;
        $newProduct->photo = $fileName;

        $request->session()->flash('status-success', 'Product was insert successful!');
        $newProduct->save();
        return redirect()->route('product.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        // die();
        // return $product=Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, $id)
    {
        if (isset($id)) {

            $product=Product::find($id);
            $file = $request->file('filePhoto');
            $fileName=date("Y-m-d",time()).'-'.$file->getClientOriginalName();
            $path = 'uploads';
            $file->move($path, $fileName);

            $product->photo = $fileName;
            $product->name=$request->txtNameProduct;
            $product->description=$request->txtDescription;
            $product->price=$request->txtPrice;

            $product->save();
            $request->session()->flash('status-success', 'Product was update successful!');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route('product.index');
    }
}
