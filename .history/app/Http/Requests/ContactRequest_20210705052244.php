<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() === 'contact'){
            return true;
        }else{
        return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'postcode' => 'required|max:8',
            'address' => "required",
            'opinion' => 'required|max:8',

        ];
    }
    public function message()
    {
        return[
            'lastname.required' => '名字を入力してください',
             'firstname.required' => '氏名を入力してください',
             'gender' => '性別を選んでください',
             'email' => 'メールアドレスの形式にしてください',
             'postcode' => 'ハイフンありの８桁で入力してください',
             'address' => '住所を入力してください',
             'opinion' => '120字いない'
        ];
    }
}
