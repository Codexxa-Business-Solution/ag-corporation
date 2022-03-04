<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subcategorys = SubCategory::all();
      
        return view('admin.manage-product-subCategory', ['subcategories' => $subcategorys]);

    }
    /**
     * git checkout master

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.manage-product-category');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'category_name' => 'required',
            
        ]);

        SubCategory::create($request->all());
         return redirect('category')->with('success', 'Category has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $SubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $SubCategory)
    {
       
      return view('admin.edit-product-category', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)

    {
       
         $request->validate([
           
            'category_name' => 'required',
            'id' => 'id'

        ]);

        $category = SubCategory::find($id);
        $category->category_name = $request->get('category_name');

        $category->update();


        $categorys = SubCategory::all();
      

        return redirect('/category')->with('success', 'category updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $SubCategory)
    {

           $Category->delete();
           return redirect('/category')->with('success', 'category name deleted successfully');
    }
}
