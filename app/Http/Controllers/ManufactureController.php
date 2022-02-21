<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $manufactures = Manufacture::all();
      
        return view('admin.manage-product-manufacture', ['manufacture' => $manufactures]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.manage-product-manufacture');

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

        $request->validate([
            'manufacturing' => 'required',
            
        ]);
        
        Manufacture::create($request->all());
         return redirect('manufacture')->with('success', 'manufacture has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacture $manufacture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacture $manufacture)
    {


        return view('admin.edit_manufacture',compact('manufacture'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
        $request->validate([
           
            'manufacturing' => 'required',
            'id' => 'id'

        ]);


        $manufacture = Manufacture::find($id);
        $manufacture->manufacturing = $request->get('manufacturing');

        $manufacture->update();


        $manufactures = Manufacture::all();
      

        return redirect('/manufacture')->with('success', 'manufacture updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacture  $manufacture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacture $manufacture)
    {
        //

        $manufacture->delete();
           return redirect('/manufacture')->with('success', 'manufacture deleted successfully');
    }
}
