<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDonationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Donation;
use App\Models\City;
use App\Models\Blood;

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

            $cities= City::all();
            $bloods = Blood::all();
            $donations = Donation::where('status' , 'Approve')->get();
            return view('frontend.allDonation', compact('donations' ,'cities' , 'bloods'));
        }



        public function filter(Request $request)
        {
            $start_date = $request->start_date;
            $end_date = $request->end_date;
            $donations = Donation::whereDate('created_at' ,'>=' , $start_date)
                                         ->whereDate('created_at' ,'<=' , $end_date)
                                          ->get();

            return view('frontend.allDonation', compact('donations'));
        }


}
