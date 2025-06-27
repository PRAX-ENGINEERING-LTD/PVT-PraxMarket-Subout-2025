<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'version' => 'required',
            'platform' => 'required|in:ios',
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
