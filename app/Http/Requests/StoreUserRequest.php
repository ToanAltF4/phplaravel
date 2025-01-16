<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|unique:users|max:191',
            'name' => 'required|string',
            'user_catalogue_id' => 'gt:0',
            'password'=> 'required|string|min:6',
            're_password'=> 'required|string|same:password',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'email chưa đúng định dạng. Ví dụ: abc@gmail.com',
            'email.unique' => 'email này đã tồn tại',
            'email.string' => 'email phải là ký tự dạng chuỗi',
            'email.max'=> 'email phải nhỏ hơn 191 ký tự',
            'name.required' => 'bạn chưa nhập full name',
            'name.string' => 'full name phải là ký tự dạng chuỗi',
            'user_catalogue_id.gt' => 'bạn chưa chọn nhóm thành viên',
            'password.required' => 'bạn chưa nhập password',
            're_password.same' => 'Mật khẩu không khớp',
            're_password.required' => 'Nhập lại mật khẩu!!!',
        ];
    }
}
