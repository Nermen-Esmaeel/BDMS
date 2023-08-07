<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Blood;
use App\Http\Requests\UpdateStock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('admin.stock.index' , compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blood_group = Stock::find($id);
        $bloods = Blood::all();
        return view('admin.stock.edit' , compact('blood_group' , 'bloods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStock $request, string $id)
    {
       $stock = Stock::find($id);
       $validated = $request->validated();
       if($validated){
        $stock->update([

            'blood_id' => $request->get('blood') ,
            'unit' => $request->get('unit'),

        ]);


       }
       return redirect()->route('stock.index')->with('edit' , 'Unit in stock updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
