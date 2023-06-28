<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Sample05Request extends FormRequest
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
            // imageを指定することで、画像（jpg、jpeg、png、bmp、gif、svg、webp）である必要となります。
            'image_file' => ['required', 'image',]
        ];
    }
}
