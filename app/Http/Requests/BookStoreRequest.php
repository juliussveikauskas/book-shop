<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'image' => 'required',
            'price' => 'required|number',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A title is required',
            'image.required' => 'Image is required',
            'price.required' => 'Price is required'
        ];
    }
}
