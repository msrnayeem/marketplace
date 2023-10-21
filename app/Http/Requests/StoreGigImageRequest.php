<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGigImageRequest extends FormRequest
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
            'images' => 'required|array|min:1|max:10',
            // Ensure it's an array with 1 to 5 files
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Each file should be an image (jpeg, png, jpg, gif) and not exceed 2MB
        ];
    }
}
