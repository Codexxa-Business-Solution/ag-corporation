<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PanelType;

class PanelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paneltypes = PanelType::all();
      
        return view('admin.panel-type', ['paneltype' => $paneltypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-panel-type');
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
            'paneltype_name' => 'required',
            
        ]);

        PanelType::create($request->all());
        return redirect('paneltype')->with('success', 'PanelType has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paneltypes = PanelType::all();
        return view('admin.panel-type', ['paneltype' => $paneltypes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\PanelType  $paneltype
     * @return \Illuminate\Http\Response
     */
    public function edit(PanelType $paneltype)
    {
        return view('admin.edit-paneltype', compact('paneltype'));
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
           
            'paneltype_name' => 'required',
            'id' => 'id'

        ]);


        $paneltypes = PanelType::find($id);
        $paneltypes->paneltype_name = $request->get('paneltype_name');

        $paneltypes->update();


        $paneltypes = PanelType::all();
      

        return redirect('/paneltype')->with('success', 'Panel Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
   *   * @param  \App\Models\PanelType  $paneltype
     * @return \Illuminate\Http\Response
     */
    public function destroy(PanelType $paneltype)
    {
        $paneltype->delete();
        return redirect('/paneltype')->with('success', 'Panel Type deleted successfully');
    }
}
