<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopPost extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'shopname' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'此字段不存在',
            'shopname' => '未定义',
        ];
    }
}
