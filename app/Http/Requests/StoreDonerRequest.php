<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class StoreDonerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['required' , 'min:8'],
            'age' => ['required'],
            'weight' => ['required'],
            'phone' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:500'],
            'status' =>['required'] ,
        ];
    }

    public function messages(){
        return [
             'first_name.required' => 'First Name is required and must not be greater than 255 characters.' ,
             'first_name.required' => 'First Name is required and must not be greater than 255 characters.' ,
             'last_name.required' => 'last Name is required and must not be greater than 255 characters.' ,
             'phone.required' => 'Phone number is required and must not be greater than 10 numbers.' ,
             'password.required' => 'password must be at least 8 characters' ,

        ];
    }
}
