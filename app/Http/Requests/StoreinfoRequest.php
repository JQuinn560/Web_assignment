<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreinfoRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'integer', 'min:11', 'max:11'],
            'min-number' => ['required', 'integer', 'min:10000'],
            'max-number' => ['required', 'integer', 'max:99999999'],
            'whole-number' => ['required', 'integer', 'min:1'],
            'max-whole-number' => ['required', 'integer', 'min:100'],
            'number-range' => ['required', 'integer', 'min:20', 'max:40'],         
         'picture' => ['requried', 'mimes: jpg,bmp,png,jpeg']
            
        ];
    }
}
