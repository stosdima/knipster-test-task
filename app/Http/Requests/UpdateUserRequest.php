<?php

namespace App\Http\Requests;

class UpdateUserRequest extends JsonRequest
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
            'email' => 'email|unique:user',
            'first_name' => 'min:2',
            'last_name' => 'min:2',
        ];
    }
}
