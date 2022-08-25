<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'offer_name_surname' => 'string|required',
            'offer_comment' => 'string|nullable',
            'offer_email' => 'email|nullable|regex:/^.+@.+$/i',
            'offer_phone' => 'required|regex:/(373)[0-9]{8}/',
            'monthly_electricity' => 'required|string',
            'heated_area' => 'required|string',
            'required_power' => 'required|string',
            'required_qty' => 'required|string',
            'required_area_roof' => 'required|string',
            'required_area_earth' => 'required|string',
        ];
    }
}
