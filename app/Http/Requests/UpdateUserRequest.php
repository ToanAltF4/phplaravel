<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email, '.$this->id.'|max:191',
            'name' => 'required|string',
            'user_catalogue_id' => 'gt:0',
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
        ];
    }
}
