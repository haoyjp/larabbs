<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;

class UserRequest extends FormRequest
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
            'name'=> 'required|between:3,25|regex:/^[0-9a-zA-Z]+$/|unique:users,name,'.Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => '用户名已被占用，请重新填写！',
            'name.regex' =>'用户名只支持英文字母、数字和下横线',
            'name.between' =>'用户名长度介于3-25个字符',
            'name.required' =>'用户名不能为空',
        ];
    }
}
