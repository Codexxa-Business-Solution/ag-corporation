<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Qoute;

use App\Models\Manufacture;
use App\Models\Unit;
use App\Models\VoltMeter;
use App\Models\Ammeter;
use App\Models\Spp;
use App\Models\SwitchMake;
use App\Models\Hp;

use App\Models\Category;
use App\Models\Indication;
use App\Models\PanelLocation;
use App\Models\Busbar;
use App\Models\PanelType;
use App\Models\Mounting;
use App\Models\Access;
use App\Models\CableMakeType;
use App\Models\CableEntry;
use App\Models\PanelColour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $unit = Unit::all();
        $category = Category::all();
        $manufacture = Manufacture::all();
        $product = Product::all();
        $voltmeter = VoltMeter::all();
        $ammeter = Ammeter::all();   
        $switchmake = SwitchMake::all();
        $indication = Indication::all();
        $hp = Hp::all();
        $panelLocation = PanelLocation::all();
        $panelcolour = PanelColour::all();
        $busbar = Busbar::all();
        $paneltype = PanelType::all();
        $mounting = Mounting::all();
        $access = Access::all();
        $cablemaketype = CableMakeType::all();
        $cablentry = CableEntry::all();

        
      return view('user.get-a-quote', compact('unit','category','manufacture','product','voltmeter','ammeter','switchmake','indication','hp','panelLocation','panelcolour','busbar','paneltype','mounting','access','cablemaketype','cablentry'));

    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Qoute::all();
        $unit = Unit::all();
        $category = Category::all();
        $manufacture = Manufacture::all();

        return view('admin.add-product-master', compact('unit','category','manufacture'));

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

// dd($request);
        $request->validate([
            'project_name' => 'required',
            'delivery_date' => 'required',
            // 'subcategory' => 'required',
            'date' => 'required',
           

            
        ]);

        Qoute::create($request->all());
         return redirect('qoute')->with('success', 'quote has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
    
        $unit = Unit::all();
        $category = Category::all();
        $manufacture = Manufacture::all();

        return view('admin.edit-product-master', compact('unit','category','manufacture','product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'units' => 'required',
            'category' => 'required',
            // 'subcategory' => 'required',
            'manf_name' => 'required',
            'purchase_rate' => 'required',
            'purchase_discount' => 'required',
            'actual_rate' => 'required',
            'discription' => 'required',
            
        ]);

        $product = Product::find($id);
        $product->item_name = $request->get('item_name');
        $product->category = $request->get('category');
        $product->subcategory = $request->get('subcategory');
        $product->manf_name = $request->get('manf_name');
        $product->purchase_rate = $request->get('purchase_rate');
        $product->purchase_discount = $request->get('purchase_discount');
        $product->actual_rate = $request->get('actual_rate');
        $product->discription = $request->get('discription');
        $product->update();

        $pruducts = Product::all();

        return redirect('/product')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/product')->with('success', 'Unit deleted successfully');

    }
}
