<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebsiteGeneralRequest extends FormRequest
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
            'counter1_name'  => "required",
            'counter1_value' => "required",
            'counter2_name'  => "required",
            'counter2_value' => "required",
            'counter3_name'  => "required",
            'counter3_value' => "required",
            'who_we_are'     => "required",
            'mission'        => "required",
            'processes'      => "required",
            'how_we_work'    => "required",
            'what_we_do'     => "required"

        ];
    }
}
