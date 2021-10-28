<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RenunganRequest extends FormRequest
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
            'them' => 'required',
            'verse' => 'required',
            'content' => 'required',
            'exp' => 'required',
            'slug' => 'required'
        ];
    }
}
