<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CableMakeType;

class CableMakeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cablemaketypes = Cablemaketype::all();
      
        return view('admin.cable-make', ['cablemaketype' => $cablemaketypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-cable-make');
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
            'cablemake_name' => 'required',
            
        ]);

        Cablemaketype::create($request->all());
        return redirect('cablemaketype')->with('success', 'Cable Make Type has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cablemaketypes = Cablemaketype::all();
        return view('admin.cable-make', ['cablemaketype' => $cablemaketypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\CableMakeType  $cablemaketype
     * @return \Illuminate\Http\Response
     */
    public function edit(CableMakeType $cablemaketype)
    {
        return view('admin.edit-cablemaketype', compact('cablemaketype'));
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
        $request->validate([
           
            'cablemake_name' => 'required',
            'id' => 'id'

        ]);


        $cablemaketypes = Cablemaketype::find($id);
        $cablemaketypes->cablemake_name = $request->get('cablemake_name');

        $cablemaketypes->update();


        $cablemaketypes = Cablemaketype::all();
      

        return redirect('/cablemaketype')->with('success', 'Cable Make Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\CableMakeType  $cablemaketype
     * @return \Illuminate\Http\Response
     */
    public function destroy(CableMakeType $cablemaketype)
    {
        $cablemaketype->delete();
        return redirect('/cablemaketype')->with('success', 'Cable Make Type deleted successfully');
    }
}
