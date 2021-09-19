<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
class userChPassRequest extends FormRequest
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





            'New_password' =>'required|string|min:4',
            'confirmpassword' => 'required|required_with:New_password|same:New_password',
            'password'=>'required',


            // 'password'=>'required|password',
            // 'password2'=>'required|min:6',
            // 'password'=>'required|min:6|same:password2',

        ];
    }

    public function messages()
    {
        return [
            'New_password.min' =>'يجب ان يتكون كلمة المرور من اربعة احرف على الاقل',
            'New_password.required' => 'كلمة السر مطلوبة.',
            'password.required' => 'كلمة السر الحالية مطلوبة',
            'confirmpassword.required' =>'تاكيد كلمة السر مطلوبة',
            'confirmpassword.same' =>'كلمة السر غير متطابقة',
            'confirmpassword.min' =>'يجب ان يتكون كلمة المرور من اربعة احرف على الاقل'

        ];
    }
}
