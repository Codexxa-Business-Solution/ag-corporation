<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $units = Unit::all();
      
        return view('admin.manage-units', ['unit' => $units]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.manage-units');

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
            'units' => 'required',
            
        ]);

        Unit::create($request->all());
         return redirect('unit')->with('success', 'Unit has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
       
        
      return view('admin.manage-units_edit', compact('unit'));


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
           
            'units' => 'required',
            'id' => 'id'

        ]);


        $unit = Unit::find($id);
        $unit->units = $request->get('units');

        $unit->update();


        $units = Unit::all();
      

        return redirect('/unit')->with('success', 'unit updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {

           $unit->delete();
           return redirect('/unit')->with('success', 'Unit deleted successfulyl');
    }
}
