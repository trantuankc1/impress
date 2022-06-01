<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'firstName' => 'required|string|min:2|max:50',
            'lastName' => 'required|string|min:2|max:50',
            'email' => 'required|string|email|min:6|max:100',
            'phone' => 'required|numeric',
            'requestDetail' => 'required|string|min:10'
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống',
            'string' => ':attribute bắt buộc phải là kiểu chuỗi Aa -> Zz',
            'email' => ':attribute không đúng định dạng ',
            'numeric' => ':attribute phải là  số từ 0 -> 9',
            'max' => ':attribute phải ít hơn hay bằng :max ký tự ',
            'min' => ':attribute phải nhỏ hơn hay bằng :min ký tự ',
            'confirmed' => ':attribute nhập lại không giống nhau',
            'unique' => ':attribute đã được sử dụng'
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'firstName' => 'Tên',
            'lastName' => 'Họ',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
            'requestDetail' => 'Lời để nghị'
        ];
    }
}
