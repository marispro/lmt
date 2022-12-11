<?php

namespace App\Http\Requests;

use App\Rules\NameLastname;
use Illuminate\Foundation\Http\FormRequest;

class ContestRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                new NameLastname()
            ],
            'email' => 'required|email:rfc,dns,filter',
        ];
    }
}
