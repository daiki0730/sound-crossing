<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidPassword implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9!-\/:-@\[-`\{-\~]+$/', $value) &&
            preg_match('/[a-zA-Z]+/', $value) &&
            preg_match('/[0-9]+/', $value) &&
            preg_match('/[!-\/:-@\[-`\{-\~]+/', $value) &&
            strlen($value) >= 8;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'パスワードは半角英数記号すべてを含む8文字以上です';
    }
}
