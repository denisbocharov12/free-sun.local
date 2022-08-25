<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_surname' => 'string|required',
            'comment' => 'string|nullable',
            'email' => 'email|nullable|regex:/^.+@.+$/i',
            'phone' => 'required|regex:/(373)[0-9]{8}/',
        ];
    }
}
