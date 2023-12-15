<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeaUpdateRequest extends FormRequest
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
            'name_tm' => 'required',
            'name_en' => 'required',
            'name_ru' => 'required',
            'images' => 'required|array|max:10',
            'images.*' => 'mimetypes:image/jpeg,image/png,image/jpg',
            'price' => 'required|numeric|min:0|max:99999',
            'discount' => 'required|numeric|min:0|max:99999',
        ];
    }
}
