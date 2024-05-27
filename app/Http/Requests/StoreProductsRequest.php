<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
            'is_active' => ['required'],
            'description' => ['required'],
            'photo_url' => ['nullable'], // Menjadikan photo_url opsional
            'photo_name' => ['nullable'], // Menjadikan photo_name opsional
        ];
    }

}
