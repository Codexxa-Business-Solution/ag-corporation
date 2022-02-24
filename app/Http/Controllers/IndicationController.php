<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Indication;

class IndicationController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indications = Indication::all();
      
        return view('admin.incomer-products', ['indication' => $indications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-Indication');
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
            'indication_name' => 'required',
            
        ]);

        Indication::create($request->all());
        return redirect('indication')->with('success', 'Indication has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indications = Indication::all();
        return view('admin.incomer-products', ['indication' => $indications]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\Hp  $hps
     * @return \Illuminate\Http\Response
     */
    public function edit(Indication $indication)
    {
        return view('admin.edit-Indication', compact('indication'));
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
           
            'indication_name' => 'required',
            'id' => 'id'

        ]);


        $indications = Indication::find($id);
        $indications->indication_name = $request->get('indication_name');

        $indications->update();


        $indications = Indication::all();
      

        return redirect('/indication')->with('success', 'Indication updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
    *   * @param  \App\Models\indication  $hps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indication $indication)
    {
        $indication->delete();
        return redirect('/indication')->with('success', 'Indication deleted successfully');
    }
}
