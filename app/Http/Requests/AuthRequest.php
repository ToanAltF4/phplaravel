<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email' => 'required|email',
            'password'=> 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'email chưa đúng định dạng. Ví dụ: abc@gmail.com',
            'password.required' => 'bạn chưa nhập password'
        ];
    }
}
