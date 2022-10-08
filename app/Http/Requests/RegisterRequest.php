<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|regex:/^[A-Z]+$/i',
            'email'=>'email:rfc,dns',
            'password'=>'required|confirmed',
         
        ];
    }
    public function messages()
   {
    return [
        'name.required' => 'A name field is required',
        'email.required' => 'A email field is required',
        'password.required' => 'A password field is required',
     ];
   }
   }
