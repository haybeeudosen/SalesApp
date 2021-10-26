<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\SupplierModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductModel::with(['category_models', 'supplier_models', 'brand_models'])->get();
        return view('product/index',['products' => $products ])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('hfhfgvhj');
        $brands = BrandModel::pluck('brand_name')->all();
        $categories = CategoryModel::pluck('category_name')->all();
        $suppliers = SupplierModel::pluck('supplier_name')->all();
        return view('product/create',['categories' => $categories, 'brands' => $brands, 'suppliers' => $suppliers]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'product_name' => 'required',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',
        ]);

        $product = new productModel();
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');
        $product->supplier_id = $request->input('supplier_id');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();
        return redirect('product/index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = productModel::with(['category_models', 'supplier_models', 'brand_models'])->find($id);
        return view('product/show', ['product' => $product]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = productModel::with(['category_models', 'supplier_models', 'brand_models'])->find($id);
        return view('product/edit', ['product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'product_name' => 'required',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'supplier_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',

        ]);


        $product = productModel::with(['category_models', 'supplier_models', 'brand_models'])->find($id);
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');
        $product->supplier_id = $request->input('supplier_id');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        return redirect('product/index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = productModel::with(['category_models', 'supplier_models', 'brand_models'])->find($id);
        $product->delete();
        return redirect('product/index');

    }
}
