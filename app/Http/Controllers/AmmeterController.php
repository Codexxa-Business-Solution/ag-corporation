<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ammeter;
class AmmeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ammeters = Ammeter::all();
      
        return view('admin.ammeter', ['ammeter' => $ammeters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-ammeter');
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
            'ammeters_name' => 'required',
            
        ]);

        Ammeter::create($request->all());
        return redirect('ammeter')->with('success', 'Ammeter has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ammeters = Ammeter::all();
        return view('admin.ammeter', ['ammeter' => $ammeters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\Voltmeter  $Voltmeters
     * @return \Illuminate\Http\Response
     */
    public function edit(Ammeter $ammeter)
    {
        return view('admin.edit-ammeter', compact('ammeter'));
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
           
            'ammeters_name' => 'required',
            'id' => 'id'

        ]);


        $ammeters = Ammeter::find($id);
        $ammeters->ammeters_name = $request->get('ammeters_name');

        $ammeters->update();


        $ammeters = Ammeter::all();
      

        return redirect('/ammeter')->with('success', 'Ammeter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\Voltmeter  $voltmeters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ammeter $ammeter)
    {
        $ammeter->delete();
        return redirect('/ammeter')->with('success', 'Ammeter deleted successfulyl');
    }
}
