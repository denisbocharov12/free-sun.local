<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'surname' => 'string|required',
            'email' => 'email|required|regex:/^.+@.+$/i',
            'phone' => 'required|regex:/(373)[0-9]{8}/',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Неверное имя',
            'surname.required' => 'Неверная фамилия',
            'email.regex' => 'Неверный формат Email адреса',
            'phone.regex' => 'Необходимо начинать с 373',
        ];
    }
}
