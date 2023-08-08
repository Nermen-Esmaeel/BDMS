<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreDonationRequest extends FormRequest
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
            'doner' =>['required'],
            'unit' => 'required|integer|max:5',
            'date' => ['required'],
            'feedback'   =>  'required|string|between:30,600',
            'diseases' => ['nullable'],

        ];
    }

    public function messages(){
        return [
             'unit.required' => 'Title is required!' ,
             'date.required' => 'Date field is required!' ,
             'feedback.required' => 'Description field is required and must be between 30 and 600 characters.',


        ];
    }
}
