<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sample04Request extends FormRequest
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
            //
            'user_name' => ['required', ],
            'email'     => ['email', ],
        ];
    }

    public function messages() {
        return [
            'name.required' => '名前が⼊⼒されていません',
            'email.email' => 'メールアドレスの形式が間違っています',
        ];
    }
}
