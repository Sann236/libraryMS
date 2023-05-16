<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            //
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000',
            'name' => 'required',
            'category_id' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required',
        ];
    }
}
