<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            'title' => 'required|min:1',
            'text' => 'required|min:1',
            'date' => 'required|date'
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Поле имя не может быть пустое',
            'text.required' => 'Поле фамилия не может быть пустое',
            'date.required' => 'Поле год рождения не может быть пустое'
        ];
    }
}
