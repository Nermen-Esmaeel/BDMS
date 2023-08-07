<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\City;
use App\Models\Blood;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $cities= City::all();
        $bloods = Blood::all();
        return view('auth.register' , compact('cities' ,'bloods'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'age' => ['required'],
            'weight' => ['required'],
            'phone' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:500'],


        ]);

        $user = User::create([
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
            'status' => 'doner',

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
