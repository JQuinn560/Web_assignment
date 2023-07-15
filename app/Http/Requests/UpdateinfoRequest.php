<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateinfoRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'start' => 'required|date',
            'enddate' => 'required|date',
            'minnumber' => 'required|numeric|min:5',
            'maxnumber' => 'required|numeric|max:8',
            'wholenumber' => 'required|integer|min:1',
            'maxwholenumber' => 'required|integer|max:100',
            'numberrange' => 'required|array|min:20|max:40',
            'instagramurl' => 'nullable|url',
            'picture' => 'nullable|image|max:2048', // Adjust the validation rules for the picture field as needed
        ];
    }
}
