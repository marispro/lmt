<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NameLastname implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $value = Str::of($value)->trim()->replace('.', '');

        $words = explode(' ', $value);
        if(count($words) < 2) return false; // minimum 2 words
        if(count($words) > 4) return false; // maximum 4 words

        $check = true;
        foreach($words as $word){
            $validator = Validator::make([
                'word' => $word
            ], [
                'word' => 'required|string|min:2|alpha_dash'
            ]);
            if($validator->fails()) $check = false;
        }

        return $check;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Lūdzu ievadiet vārdu un uzvārdu');
    }
}
