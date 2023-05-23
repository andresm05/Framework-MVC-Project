<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [           
            'title' => 'required|min:3|max:100',
            'slug' => 'required|min:3|max:500|unique:posts',
            'content' => 'required|min:7',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'required|min:3|max:255',
        ];
    }
}
