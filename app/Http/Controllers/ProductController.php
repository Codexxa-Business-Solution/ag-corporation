<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Manufacture;
use App\Models\Unit;
use App\Models\Category;
use App\Models\SubCategory;

use App\Http\Controllers\Controller;
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
    
        $products = Product::join('units', 'units.id', '=', 'products.units')
        ->join('manufactures', 'manufactures.id', '=', 'products.manf_name')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->join('sub_categories', 'sub_categories.id', '=', 'products.subcategory')

        ->get(['products.id','products.item_name','products.category','products.subcategory','sub_categories.subcategory_name', 'products.manf_name','products.units','products.purchase_rate','products.purchase_discount','products.actual_rate', 'units.units', 'manufactures.manufacturing','categories.category_name']);


            // // ->get(['units.*','manufactures.*',"product.item_name"]);
            // echo"<pre>";
            // print_r($products);die;

    return view('admin.product-master', ['product' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Unit::all();
        $category = Category::all();
        $manufacture = Manufacture::all();
        $subcategory = SubCategory::all();

        return view('admin.add-product-master', compact('unit','category','manufacture','subcategory'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

// dd($request);
        $request->validate([
            'units' => 'required',
            'category' => 'required',
            // 'subcategory' => 'required',
            'manf_name' => 'required',
            'purchase_rate' => 'required',
            'purchase_discount' => 'required',
            'actual_rate' => 'required',
            'discription' => 'required',

            
        ]);

        Product::create($request->all());
         return redirect('product')->with('success', 'product has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    
        $unit = Unit::all();
        $category = Category::all();
        $manufacture = Manufacture::all();
        $subcategory = SubCategory::all();

        return view('admin.edit-product-master', compact('unit','category','manufacture','product','subcategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'units' => 'required',
            'category' => 'required',
             'subcategory' => 'required',
            'manf_name' => 'required',
            'purchase_rate' => 'required',
            'purchase_discount' => 'required',
            'actual_rate' => 'required',
            'discription' => 'required',
            
        ]);

        $product = Product::find($id);
        $product->item_name = $request->get('item_name');
        $product->category = $request->get('category');
        $product->subcategory = $request->get('subcategory');
        $product->manf_name = $request->get('manf_name');
        $product->purchase_rate = $request->get('purchase_rate');
        $product->purchase_discount = $request->get('purchase_discount');
        $product->actual_rate = $request->get('actual_rate');
        $product->discription = $request->get('discription');
        $product->update();

        $pruducts = Product::all();

        return redirect('/product')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/product')->with('success', 'Unit deleted successfully');

    }
}
