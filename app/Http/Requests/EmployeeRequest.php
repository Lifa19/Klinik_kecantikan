<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'user_id'      => '',
            // 'position_id'  => '',
            // 'booking_id'   => '',
            // 'report_id'    => '',
            'name'         => 'required|string|max:255',
            'address'      => 'required|string|max:255',
            'phone'        => 'required|numeric|digits_between:10,13',
            'gender'       => 'required|',
            'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
        ];
    }
}
