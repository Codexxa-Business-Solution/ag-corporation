<?php

namespace App\Http\Controllers;
use App\Models\Access;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $access = Access::all();
      
        return view('admin.access', ['access' => $access]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('admin.add-access');
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
            'access_name' => 'required',
            
        ]);

        Access::create($request->all());
        return redirect('access')->with('success', 'Access has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $access = Access::all();
        return view('admin.access', ['access' => $access]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *   * @param  \App\Models\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function edit(Access $access)
    {
        return view('admin.edit-access', compact('access'));
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
           
            'access_name' => 'required',
            'id' => 'id'

        ]);


        $access = Access::find($id);
        $access->access_name = $request->get('access_name');

        $access->update();


        $access = Access::all();
      

        return redirect('/access')->with('success', 'Access updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\Access  $access
     * @return \Illuminate\Http\Response
     */
    public function destroy(Access $access)
    {
        $access->delete();
        return redirect('/access')->with('success', 'Access deleted successfully');
    }
}
