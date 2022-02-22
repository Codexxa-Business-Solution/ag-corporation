<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voltmeter;
class VoltMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voltmeters = Voltmeter::all();
      
        return view('admin.volt-meter', ['voltmeter' => $voltmeters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-volt-meter');
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
            'voltmeters_name' => 'required',
            
        ]);

        Voltmeter::create($request->all());
        return redirect('voltmeter')->with('success', 'Voltmeter has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voltmeters = Voltmeter::all();
        return view('admin.volt-meter', ['voltmeter' => $voltmeters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\Voltmeter  $Voltmeters
     * @return \Illuminate\Http\Response
     */
    public function edit(Voltmeter $voltmeter)
    {
        return view('admin.edit-voltmeter', compact('voltmeter'));
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
           
            'voltmeters_name' => 'required',
            'id' => 'id'

        ]);


        $voltmeters = Voltmeter::find($id);
        $voltmeters->voltmeters_name = $request->get('voltmeters_name');

        $voltmeters->update();


        $voltmeters = Voltmeter::all();
      

        return redirect('/voltmeter')->with('success', 'Voltmeter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
    *   * @param  \App\Models\Voltmeter  $hps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voltmeter $voltmeter)
    {
        $voltmeter->delete();
        return redirect('/voltmeter')->with('success', 'Voltmeter deleted successfulyl');
    }
}
