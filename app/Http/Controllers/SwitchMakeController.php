<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SwitchMake;
class SwitchMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $switchmakes = SwitchMake::all();
      
        return view('admin.switch-make', ['switchmake' => $switchmakes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-switch-make');
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
            'switchmakes_name' => 'required',
            
        ]);

        SwitchMake::create($request->all());
        return redirect('switchmake')->with('success', 'SwitchMake has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $switchmakes = SwitchMake::all();
        return view('admin.switch-make', ['switchmake' => $switchmakes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\SwitchMake  $SwitchMake
     * @return \Illuminate\Http\Response
     */
    public function edit(Switchmake $switchmake)
    {
        return view('admin.edit-switch-make', compact('switchmake'));
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
           
            'switchmakes_name' => 'required',
            'id' => 'id'

        ]);


        $switchmakes = SwitchMake::find($id);
        $switchmakes->switchmakes_name = $request->get('switchmakes_name');

        $switchmakes->update();


        $switchmakes = SwitchMake::all();
      

        return redirect('/switchmake')->with('success', 'SwitchMake updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
    *   * @param  \App\Models\SwitchMake  $SwitchMake
     * @return \Illuminate\Http\Response
     */
    public function destroy(Switchmake $switchmake)
    {
        $switchmake->delete();
        return redirect('/switchmake')->with('success', 'Switchmake deleted successfully');
    }
}
