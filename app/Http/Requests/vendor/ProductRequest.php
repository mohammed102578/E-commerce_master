<?php

namespace App\Http\Requests\vendor;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'photo.*' => 'required_without:id|mimes:jpg,jpeg,png',
            'title' => 'required_without:id|string|max:100',
            'description' => 'required_without:id|string|max:1000',
            'discount' => 'required_without:id|int',
            'price' => 'required_without:id|int',
            'stock' => 'required_without:id|int',
            'category_id'  => 'required_without:id|exists:sub_category,id',
        ];
    }
    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
            'max'  => 'هذا الحقل طويل',
            'category_id.exists'  => 'القسم غير موجود ',
            'title.string'  =>'الاسم لابد ان يكون حروف او حروف وارقام ',
            'photo.*.required_without'  => 'الصوره مطلوبة',

        ];
    }

}
