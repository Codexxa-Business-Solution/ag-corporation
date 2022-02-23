<?php

namespace App\Http\Controllers;
use App\Models\Busbar;
use Illuminate\Http\Request;

class BusbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busbars = Busbar::all();
      
        return view('admin.busbar', ['busbar' => $busbars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-busbar');
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
            'busbars_type' => 'required',
            
        ]);

        Busbar::create($request->all());
        return redirect('busbar')->with('success', 'Busbar Type has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $busbars = Busbar::all();
        return view('admin.busbar', ['voltmeter' => $busbars]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\Busbar  $busbars
     * @return \Illuminate\Http\Response
     */
    public function edit(Busbar $busbar)
    {
        return view('admin.edit-busbars', compact('busbar'));
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
           
            'busbars_type' => 'required',
            'id' => 'id'

        ]);


        $busbars = Busbar::find($id);
        $busbars->busbars_type = $request->get('busbars_type');

        $busbars->update();


        $busbars = Busbar::all();
      

        return redirect('/busbar')->with('success', 'Busbar Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\Busbar  $busbars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busbar $busbar)
    {
        $busbar->delete();
        return redirect('/busbar')->with('success', 'Busbar Type deleted successfully');
    }
}
