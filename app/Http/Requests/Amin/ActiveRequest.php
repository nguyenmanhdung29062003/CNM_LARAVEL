<?php

namespace App\Http\Requests\Amin;

use Illuminate\Foundation\Http\FormRequest;

class ActiveRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'user_id' => ['required', 'integer', 'exists:users,id'],

        ];
    }

    //customize err
    public function messages()
    {
        return [
            // Messages for category_id
            'user_id.required' => 'The user field is required',
            'user_id.integer' => 'The user must be a number',
            'user_id.exists' => 'The selected user does not exist',
        ];
    }
}
