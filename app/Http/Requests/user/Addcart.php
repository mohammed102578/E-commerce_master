<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class Addcart extends FormRequest
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
            'product_id' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'color' => ['required','string'],

            'quantity' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',


        ];
    }

    public function messages()
    {
        return [


            'product_id.unique'=>'هذا المنتج تم اضافته من قبل',

        ];
    }
}
