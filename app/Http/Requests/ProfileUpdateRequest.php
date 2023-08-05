<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [

            'first_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'user_name' => ['nullable', 'string', 'max:255'],
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)],
            'password' => ['nullable' , 'min:8'],
            'age' => ['nullable'],
            'weight' => ['nullable'],
            'phone' => ['nullable', 'string', 'max:10'],
            'address' => ['nullable', 'string', 'max:500'],

        ];
    }

    public function messages(){
        return [
             'first_name.max' => 'First Name must not be greater than 20 characters.' ,
             'first_name.max' => 'First Name  must not be greater than 20 characters.' ,
             'last_name.max' => 'last Name  must not be greater than 20 characters.' ,
             'phone.max' => 'Phone number must not be greater than 10 numbers.' ,
             'password.min' => 'password must be at least 8 characters' ,

        ];
    }
}
