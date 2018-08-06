<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'nameCustomer' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nameCustomer.required' => 'Vui lòng nhập họ tên',
            'phone.required'  => 'Vui lòng nhập số điện thoại',
            
            'address.required'  => 'Vui lòng nhập số địa chỉ',
        ];
    }
}
