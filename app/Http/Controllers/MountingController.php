<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mounting;

class MountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mountings = Mounting::all();
      
        return view('admin.mounting', ['mounting' => $mountings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-mounting');
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
            'mounting_name' => 'required',
            
        ]);

        Mounting::create($request->all());
        return redirect('mounting')->with('success', 'Mounting has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mountings = Mounting::all();
        return view('admin.mounting', ['mounting' => $mountings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\Mounting  $mounting
     * @return \Illuminate\Http\Response
     */
    public function edit(Mounting $mounting)
    {
        return view('admin.edit-mounting', compact('mounting'));
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
           
            'mounting_name' => 'required',
            'id' => 'id'

        ]);


        $mountings = Mounting::find($id);
        $mountings->mounting_name = $request->get('mounting_name');

        $mountings->update();


        $mountings = Mounting::all();
      

        return redirect('/mounting')->with('success', 'Mounting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\Mounting  $mounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mounting $mounting)
    {
        $mounting->delete();
        return redirect('/mounting')->with('success', 'Mounting deleted successfully');
    }
}
