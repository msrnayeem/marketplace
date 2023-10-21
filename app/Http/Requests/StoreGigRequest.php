<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreGigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // if (Auth::user()->is_seller == 1) {
        //     return true;
        // }
        // return false;
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
            'title' => 'required|string|min:10',
            'category' => 'required|integer',
            'subCategory' => 'required|integer',
            'about' => 'required|string|min:50',
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'required',
            'subCategory.required' => 'required',
        ];
    }
}
