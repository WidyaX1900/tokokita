<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
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
            'name' => 'required|unique:shops|',
            'email' => 'required|unique:shops|email:rfc,dns',
            'photo' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The shop name cannot be empty!',
            'name.unique' => 'The shop name has already been taken!',
            'email.required' => 'The shop email cannot be empty!',
            'email.unique' => 'The shop email has been registered!',
            'email.email' => 'Wrong email format!',
            'photo.required' => 'You must upload your shop\'s logo!'
        ];
    }
}
