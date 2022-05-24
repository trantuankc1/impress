<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:10',
            'price' => 'required|min:6',
            'content' => 'required|min:10',
            'description' => 'required|min:10',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'name' => ':attribute nhập tên sản phẩm ',
            'price' => ':attribute nhập giá sản phẩm',
            'content' => ':attribute nhập mô tả',
            'description' => ':attribute nhập thông tin chi tiết sản phẩm'
        ];
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => 'Tên sản phẩm',
            'price' => 'Giá sản phẩm',
            'content' => 'Nội dung sản phẩm',
            'description' => 'Mô tả chi tiết sản phẩm'
        ];
    }

}
