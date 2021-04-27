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
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'date' => 'required|date'
        ];
    }
    public function messages(){
        return [
            'firstname.required' => 'Поле имя не может быть пустое',
            'lastname.required' => 'Поле фамилия не может быть пустое',
            'date.required' => 'Поле год рождения не может быть пустое'
        ];
    }
}
