<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string|required',
            'mission' => 'string|required',
            'description' => 'string|nullable',
            'conservation' => 'string|required',
            'year' => 'numeric|required',
            'cost_electro_before' => 'string|required',
            'cost_electro_after' => 'string|required',
            'cost_otoplen_before' => 'string|required',
            'cost_otoplen_after' => 'string|required',
        ];
    }
}
