<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'birthday' => 'required|date',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:1000',
            'abt_me' => 'nullable|string|max:1000',
            'fb' => 'nullable|url|max:255',
            'ig' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
        ];
    }
}
