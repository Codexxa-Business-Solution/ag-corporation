<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hp;
class HpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hps = Hp::all();
      
        return view('admin.add-HP', ['hp' => $hps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-HP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'hp_name' => 'required',
            
        ]);

        Hp::create($request->all());
         return redirect('hp')->with('success', 'HP has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hps = Hp::all();
      
        return view('admin.hp_products', ['hp' => $hps]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     *   * @param  \App\Models\Hp  $hps
     * @return \Illuminate\Http\Response
     */
    public function edit(Hp $hp)
    {
        //
        return view('admin.manage-Hp_edit', compact('hp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *   * @param  \App\Models\Hp  $hps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
           
            'hp_name' => 'required',
            'id' => 'id'

        ]);


        $hps = Hp::find($id);
        $hps->hp_name = $request->get('hp_name');

        $hps->update();


        $hps = Hp::all();
      

        return redirect('/hp')->with('success', 'HP updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   * @param  \App\Models\Hp  $hps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hp $hp)
    {
        //
        $hp->delete();
        return redirect('/hp')->with('success', 'HP deleted successfully');
    }
}
