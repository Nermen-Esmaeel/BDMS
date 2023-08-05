<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\City;
use App\Models\Blood;
use App\Http\Requests\StoreDonerRequest;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;



class DonerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doners = User::where('status' , 'doner')->get();
        return view('admin.doner.index' , compact('doners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities= City::all();
        $bloods = Blood::all();
        return view('admin.doner.create' , compact('cities' , 'bloods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonerRequest $request)
    {

        $validated = $request->validated();

        if($validated) {
            $doner = User::create([
                'firsName' => $request->first_name,
                'lastName' => $request->last_name,
                'userName' => $request->user_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'age' =>  $request->age,
                'weight' =>  $request->weight,
                'phone' => $request->phone,
                'address' => $request->address ,
                'city_id' => $request->city,
                'blood_id' =>  $request->blood,
                'status' => $request->status,

            ]);
            return redirect()->route('doner.index')->with('success' , 'Users Added Successfuly');

        }
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
        $doner = User::where('status' , 'doner')->find($id);
        $cities= City::all();
        $bloods = Blood::all();
        return view('admin.doner.edit' , compact('cities' , 'bloods' , 'doner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doner = User::where('status' , 'doner')->find($id);

        $attributes = $request->validate([
            'first_name' => ['nullable','max:255', 'min:2'],
            'last_name' => ['nullable','max:100'],
            'user_name' => ['nullable','max:100'],
            'email' => ['required', 'email', 'max:255',],
            'age' => ['nullable'],
            'weight' => ['nullable'],
            'phone' => ['string', 'max:10'],
            'address' => ['string', 'max:500'],


        ]);
            if($attributes) {

                $doner->update([
                    'firsName' => $request->get('first_name'),
                    'lastName' => $request->get('last_name'),
                    'userName' => $request->get('user_name'),
                    'email' => $request->get('email') ,
                    'age' =>  $request->get('age'),
                    'weight' =>  $request->get('weight'),
                    'phone' => $request->get('phone'),
                    'address' => $request->get('address') ,
                    'city_id' => $request->get('city'),
                    'blood_id' =>  $request->get('blood'),

                ]);
            }

        return Redirect::route('doner.index')->with('edit', 'profile-updated');
        }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doner = User::findOrFail($id);
        $doner->delete();
        return redirect()->route('doner.index')->with('delete' , 'Users Deleted Successfuly');

    }
}
