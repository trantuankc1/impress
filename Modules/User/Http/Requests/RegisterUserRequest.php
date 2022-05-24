<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:6', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required']
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
            'name' => 'Tên người dùng',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Mật khẩu xác nhận'
        ];
    }
}
