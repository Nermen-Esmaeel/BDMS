<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Donation;
use App\Models\User;
use App\Models\Blood;
use App\Models\Stock;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations= Donation::all();
        return view('admin.donation.index' , compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doners = User::where('status' , 'doner')->get();
        $bloods = Blood::all();
        return view('admin.donation.create' , compact('doners' , 'bloods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonationRequest $request)
    {

            $validated = $request->validated();
            if($validated){
                $donation = Donation::create([

                    'user_id' => $request->doner ,
                    'Unit'   =>  $request->unit ,
                    'last_date'  => $request->date ,
                    'feedback'  => $request->feedback ,
                    'diseases'  => $request->diseases ,
                    'status' => 'Pending',

                ]);

            }
            return redirect()->route('donation.index')->with('success' , 'Users Added Successfuly');
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
        $doners = User::where('status' , 'doner')->get();
        $donation = Donation::find($id);
        return view('admin.donation.edit' , compact('donation' , 'doners'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonationRequest $request, string $id)
    {
        $donation = Donation::find($id);
        $validated = $request->validated();

        if($validated){
            $donation->update([

                'user_id' => $request->get('doner'),
                'Unit' => $request->get('unit'),
                'last_date' => $request->get('date'),
                'feedback' => $request->get('feedback') ,
                'diseases' =>  $request->get('diseases'),
                'status'   =>  $request->get('status'),

            ]);

        }
        return Redirect::route('donation.index')->with('edit', 'Donation-updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();
        return redirect()->route('donation.index')->with('delete' , 'Users Deleted Successfuly');

    }


    public function approve($id){
        $donation = Donation::find($id);
        $blood_id =$donation->user->blood_id;
        $stocks =Stock::all();
        foreach($stocks as $stock){
            if($blood_id ==  $stock->blood_id){
             $stock->unit = $stock->unit + $donation->Unit;
             $stock->save();
            }
        }
        $donation->status = 'Approve';
        $donation->save();
        return redirect()->route('donation.index')->with('success' , 'Status changed To Approve and Apply to Stock Successfuly ');
    }

    public function reject($id){
        $donation = Donation::find($id);
        $donation->status = 'Reject';
        $donation->save();
        return redirect()->route('donation.index')->with('delete' , 'Status changed To Reject Successfuly');
    }
}
