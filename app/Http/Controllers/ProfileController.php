<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\City;
use App\Models\Blood;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request ): View
        {
                $cities= City::all();
                $bloods = Blood::all();
        return view('profile.edit', [
            'user' => $request->user(),

        ], compact('cities' , 'bloods'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        $attributes = $request->validate([
            'first_name' => ['required','max:255', 'min:2'],
            'last_name' => ['max:100'],
            'username' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'age' => ['nullable'],
            'weight' => ['nullable'],
            'phone' => ['string', 'max:10'],
            'address' => ['string', 'max:500'],


        ]);

        auth()->user()->update([
            'firsName' => $request->get('first_name'),
            'lastName' => $request->get('last_name'),
            'userName' => $request->get('username'),
            'email' => $request->get('email') ,
            'age' =>  $request->get('age'),
            'weight' =>  $request->get('weight'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address') ,
            'city_id' => $request->get('city'),
            'blood_id' =>  $request->get('blood'),

        ]);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
