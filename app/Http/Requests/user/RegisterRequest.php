<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'confirmpassword' => 'required|required_with:password|same:password',
            'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:20|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب.',
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.email' => 'ادخل عنوان بريد إلكتروني صالح.',
            'password.required' => 'كلمة المرور مطلوب.',
            'gender.required' => 'الجنس مطلوب .',
            'name.string'=>'يجب ان يحتوي الاسم على الاحرف فقط',
            'email.unique'=>'هذا الايميل مستخدم من قبل',
            'mobile.unique'=>'هذا الرقم مستخدم من قبل',
            'password.min'=>'يجب ان يحتوي كلمة السر على 4 احرف على الاقل',
            'mobile.min'=>'يجب ان يحتوي رقم الهاتف على 10 رقم  على الاقل',
            'mobile.regex'=>'يجب ان يحتوي الحقل على ارقام فقط',
            'confirmpassword.required' =>'تاكيد كلمة المرور مطلوب',
            'mobile.required' =>'رقم الهاتف مطلوب',
            'confirmpassword.same' =>'كلمة السر غير متطابقين',
        ];
    }
}
