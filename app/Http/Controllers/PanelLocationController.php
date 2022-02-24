<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PanelLocation;
class PanelLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panellocations = PanelLocation::all();
      
        return view('admin.panel-location', ['panellocation' => $panellocations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-panel-location');
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
            'panellocations_name' => 'required',
            
        ]);

        PanelLocation::create($request->all());
        return redirect('panellocation')->with('success', 'Panel Location has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $panellocations = PanelLocation::all();
        return view('admin.panel-location', ['voltmeter' => $panellocations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\PanelLocation  $panellocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Panellocation $panellocation)
    {
        return view('admin.edit-panellocation', compact('panellocation'));
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
           
            'panellocations_name' => 'required',
            'id' => 'id'

        ]);


        $panellocations = PanelLocation::find($id);
        $panellocations->panellocations_name = $request->get('panellocations_name');

        $panellocations->update();


        $panellocations = PanelLocation::all();
      

        return redirect('/panellocation')->with('success', 'Panel Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\PanelLocation  $panellocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panellocation $panellocation)
    {
        $panellocation->delete();
        return redirect('/panellocation')->with('success', 'Panel Location deleted successfully');
    }
}
