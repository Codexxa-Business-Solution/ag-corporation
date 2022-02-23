<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CableEntry;
class CableEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabletypes = CableEntry::all();
      
        return view('admin.cable-entry', ['cabletype' => $cabletypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-cable-entry');
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
            'cabletypes_name' => 'required',
            
        ]);

        CableEntry::create($request->all());
        return redirect('cabletype')->with('success', 'Cable Type has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cabletypes = CableEntry::all();
        return view('admin.cable-entry', ['cabletype' => $cabletypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\CableEntry  $cabletype
     * @return \Illuminate\Http\Response
     */
    public function edit(Cableentry $cabletype)
    {
        return view('admin.edit-cabletype', compact('cabletype'));
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
           
            'cabletypes_name' => 'required',
            'id' => 'id'

        ]);


        $cabletypes = CableEntry::find($id);
        $cabletypes->cabletypes_name = $request->get('cabletypes_name');

        $cabletypes->update();


        $cabletypes = CableEntry::all();
      

        return redirect('/cabletype')->with('success', 'Cable Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\CableEntry  $cabletype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cableentry $cabletype)
    {
        $cabletype->delete();
        return redirect('/cabletype')->with('success', 'Cable Type deleted successfully');
    }
}
