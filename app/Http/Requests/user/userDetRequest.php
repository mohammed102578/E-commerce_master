<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class userDetRequest extends FormRequest
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
            'photo' => 'required_without:id|mimes:jpg,jpeg,png',
            'email' => 'email',
            'name' => 'string|min:2|max:30',
            'mobile'=>'regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:20',
            'gender'=>'required_without:id',
            'city'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'mobile.required' => 'رقم الموبايل مطلوب.',
            'name.required' => 'الاسم  مطلوب.',
            'name.string' => 'يجب ان يحتوي الاسم على احرف فقط',
            'email.email' => 'ادخل عنوان بريد إلكتروني صالح.',
            'mobile.digits' => 'يجب ان يحتوي رقم الموبايل على ارقام فقط',
            'photo.required_without'  => 'الصوره مطلوبة',
            'gender.required_without'  => 'الجنس مطلوبة',
            'city.required' => 'المدينة مطلوب.',
        ];
    }
}
