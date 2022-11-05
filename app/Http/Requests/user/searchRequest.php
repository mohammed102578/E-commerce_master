<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class searchRequest extends FormRequest
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

            'search' => ['required'],

            'id_category'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'search.required' => 'البحث مطلوب.',
            'id_category.required' => '  من فضلك اختر القسم.',

        ];
    }
}



















































