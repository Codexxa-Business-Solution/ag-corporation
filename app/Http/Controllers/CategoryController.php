<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorys = Category::all();
      
        return view('admin.manage-product-category', ['category' => $categorys]);

    }

    /**
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

        Category::create($request->all());
         return redirect('category')->with('success', 'Category has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Category $Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
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

        $category = Category::find($id);
        $category->category_name = $request->get('category_name');

        $category->update();


        $categorys = Category::all();
      

        return redirect('/category')->with('success', 'category updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {

           $Category->delete();
           return redirect('/category')->with('success', 'category name deleted successfully');
    }
}
