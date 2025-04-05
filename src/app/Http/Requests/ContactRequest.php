<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function messages()
     {
         return [
             'last_name.required' => '姓を入力してください',
             'first_name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'tel.required' => '電話番号を入力してください',
             'address.required' => '住所を入力してください',
             'select.required' => 'お問合せ内容の種類を選択してください',
             'content.required' => 'お問合せ内容を入力してください',
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => ['required'],
            'first_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required'],
            'tel' => ['required'],
            'address' => ['required'],
            'select' => ['required'],
            'content' => ['required'],
            

        ];
    }
}
