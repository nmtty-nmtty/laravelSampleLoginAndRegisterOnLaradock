<?php

namespace App\Http\Requests;

use App\Rules\CreateRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() === 'create') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:7|confirmed',
            'password_confirmation' => 'required|min:7',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名前',
            'email' => 'Email',
            'password' => 'パスワード',
            'password_confirmation' => '確認用パスワード',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attributeは入力必須事項です',
            'email.required' => ':attributeは入力必須事項です',
            'email.email' => ':attributeはメールアドレスの形式で入力してください',
            'password.required' => ':attributeは入力必須事項です',
            'password.min' => ':attributeは7文字以上の入力が必要です',
            'password.confirmed' => ':attributeが確認用パスワードと異なります',
            'password_confirmation.required' => ':attributeは入力必須事項です',
            'password_confirmation.min' => ':attributeは7文字以上の入力が必要です',
        ];
    }
}
