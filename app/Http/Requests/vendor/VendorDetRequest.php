<?php

namespace App\Http\Requests\vendor;
use Illuminate\Foundation\Http\FormRequest;

class VendorDetRequest  extends FormRequest
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
            'email' => 'required_without:id|email',
            'name' => 'required_without:id|string|min:2|max:30',
            'mobile'=>'required_without:id|digits:10',
            'address'=>'required|string|min:2|max:100',
            'logo'=>'required_without:id|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [

            'name.string' => ' الاسم يجب ان يكون حروف فقط.',
            'email.email' => 'ادخل عنوان بريد إلكتروني صالح.',
            'mobile.digits' => '  يجب ان يكون رقم الهاتف ارقام فقط.',
        ];
    }
}
