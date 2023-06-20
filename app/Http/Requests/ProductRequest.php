<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class ProductRequest extends FormRequest
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
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'Bắt buộc nhập :attribute',
            'product_name.min' => ':attribute phải có :min kí tự',
            'integer' => ':attribute phải là số',
        ];
    }

    public function attributes()
    {
        return [
            "product_name" => "Tên sản phẩm",
            "product_price" => "Giá sản phẩm"
        ];
    }

    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', 'Something is wrong with this field!');
            }else {
           
            }
        });
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'create_at' => date("Y-m-d H:i:s"),
        ]);
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException('Bạn không có quyển truy cập ');
    }
}
