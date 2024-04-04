<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'password' => ['required', 'min:8'],
            'employee_id'=> ['required' ],
            'role_id'=> ['required' ],
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'كلمة السر مطلوبة',
            'password.min' => 'كلمة السر يجب أن تحتوي على 8 رموز',
            'employee_id.required' => 'هذا الحقل مطلوب',
            'role_id.required' => 'هذا الحقل مطلوب',

        ];
    }
}
