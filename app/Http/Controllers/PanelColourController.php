<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PanelColour;
class PanelColourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panelcolours = PanelColour::all();
      
        return view('admin.panel-colour', ['panelcolour' => $panelcolours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-panel-colour');
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
            'panelcolours_name' => 'required',
            
        ]);

        PanelColour::create($request->all());
        return redirect('panelcolour')->with('success', 'Panel Colour has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $panelcolours = PanelColour::all();
        return view('admin.panel-colour', ['voltmeter' => $panelcolours]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\PanelColour  $panelcolour
     * @return \Illuminate\Http\Response
     */
    public function edit(Panelcolour $panelcolour)
    {
        return view('admin.edit-panelcolour', compact('panelcolour'));
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
           
            'panelcolours_name' => 'required',
            'id' => 'id'

        ]);


        $panelcolours = PanelColour::find($id);
        $panelcolours->panelcolours_name = $request->get('panelcolours_name');

        $panelcolours->update();


        $panelcolours = PanelColour::all();
      

        return redirect('/panelcolour')->with('success', 'Panel Colour updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\PanelColour  $panelcolour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panelcolour $panelcolour)
    {
        $panelcolour->delete();
        return redirect('/panelcolour')->with('success', 'Panel Colour deleted successfully');
    }
}
