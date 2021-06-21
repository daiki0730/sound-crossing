<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidEmail;
use App\Rules\ValidPassword;

class CreateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'status'    => [ 'required','numeric' ],
            'name'      => [ 'required','max:255','regex:/^[ぁ-んァ-ヶ一-龥々〜ー−]+$/u' ],
            'name_kana' => [ 'required','max:255','regex:/^[ァ-ヾ 　〜ー−]+$/u' ],
            'email'     => [ 'required','max:255','unique:admins', new ValidEmail ],
            'password'  => [ 'required','max:255','confirmed', new ValidPassword ],
            'gender'    => [ 'nullable','max:255' ],
            'birthdate' => [ 'nullable','date','before:today' ],
            'biography' => [ 'nullable','max:255' ],
            'url'       => [ 'nullable','max:255' ],
            'image'     => [ 'nullable','max:255' ],
        ];
    }

    public function attributes()
    {
        return [
            'name'                   => 'ニックネーム',
            'name_kana'              => 'ニックネーム(カナ)',
            'email'                  => 'メールアドレス',
            'password'               => 'パスワード',
            'password_confirmation'  => '確認用パスワード',
            'gender'                 => '性別',
            'birthdate'              => '生年月日',
            'biography'              => '自己紹介文',
            'url'                    => '自己紹介URL',
            'image'                  => 'アカウント写真',
        ];
    }
}
