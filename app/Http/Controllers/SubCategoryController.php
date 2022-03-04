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
      
        return view('admin.manage-product-subCategory', ['subcategory' => $subcategorys]);

    }
    /**
     * git checkout master

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.manage-product-subCategory');

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
            'subcategory_name' => 'required',
            
        ]);

        SubCategory::create($request->all());
         return redirect('subcategory')->with('success', ' Sub Category has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
       
      return view('admin.edit_subcategory', compact('subcategory'));

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
           
            'subcategory_name' => 'required',
            'id' => 'id'

        ]);

        $subcategory = SubCategory::find($id);
        $subcategory->subcategory_name = $request->get('subcategory_name');

        $subcategory->update();


        $subcategorys = SubCategory::all();
      

        return redirect('/subcategory')->with('success', 'category updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
           $subcategory->delete();
           return redirect('/subcategory')->with('success', 'sub category name deleted successfully');
    }
}
