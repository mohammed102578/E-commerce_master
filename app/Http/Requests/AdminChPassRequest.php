<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
class AdminChPassRequest extends FormRequest
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
            'confirm_New_password' => 'required|required_with:New_password|same:New_password',
            'current_password'=>'required',


            // 'password'=>'required|password',
            // 'password2'=>'required|min:6',
            // 'current_password'=>'required|min:6|same:password2',

        ];
    }

    public function messages()
    {
        return [
            'New_password.min' =>'the New_password at least 4 Character',
            'New_password.required' => 'the New password required.',
            'current_password.required' => 'the old password requiered',
            'confirm_New_password.required' =>'the confirm_New_password required',
            'confirm_New_password.same' =>'the confirm_New_password &New password not match',
            'confirm_New_password.min' =>'the confirm_New_password at least 4 Character'

        ];
    }
}
