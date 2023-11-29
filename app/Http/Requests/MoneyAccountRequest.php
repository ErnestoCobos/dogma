<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoneyAccountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'balance' => ['required', 'numeric'],
            'currency' => ['required'],
            'account_type' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
