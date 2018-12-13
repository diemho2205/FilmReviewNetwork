<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReview extends FormRequest
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
            'content' => 'required|max:255',
            'poster' => 'image|mimes:jpg,jpeg,JPEG,png,gif|max:1024',
            'character' => 'required|max:255',
            'feeling' => 'required',
            'rate' => 'integer|required|size:5'
        ];
    }
}
