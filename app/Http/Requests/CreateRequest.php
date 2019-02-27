<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|min:3|max:32',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|max:32',
            'passAgain' => 'required|same:password|'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên',
            'name.min' => 'Bạn phải nhập tên trên 3 kí tự',
            'name.max' => 'Bạn phải nhập tên dưới 32 kí tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email bạn nhập đã được đăng kí',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Bạn phải nhập mật khẩu trên 8 kí tự',
            'password.max' => 'Bạn phải nhập mật khẩu dưới 32 kí tự',
            'passAgain.required' => 'Bạn chưa nhập lại mật khẩu',
            'passAgain.same' => 'Bạn nhập lại mật khẩu chưa khớp'
        ];
    }
}
