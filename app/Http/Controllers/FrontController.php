<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDonationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Donation;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function donerRequest()
    {

        return view('frontend.donation');
    }
    public function storeRequest(StoreDonationRequest $request)
    {

        $validated = $request->validated();
        if($validated) {
            $donation = Donation::create([

                'user_id' => Auth::user()->id ,
                'Unit'   =>  $request->unit ,
                'last_date'  => $request->date ,
                'feedback'  => $request->feedback ,
                'diseases'  => $request->diseases ,
                'status' => 'Pending',

            ]);
        }
        return redirect()->back();
    }


    //show Requests for doner
    public function showRequest()
    {
        $doner_id = Auth::user()->id;
        $myDonations = Donation::where('user_id', $doner_id)->get();
        return view('frontend.myDonation', compact('myDonations'));
    }

    //show All Requests
    public function showAllRequest()
        {
            $donations = Donation::where('status' , 'Approve')->get();
            return view('frontend.allDonation', compact('donations'));
        }
}
