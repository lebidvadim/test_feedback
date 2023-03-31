<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SendMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'phone'     => ['required', 'string'],
            'city_id'   => ['required', Rule::exists('cities','id')],
            'message'   => ['required', 'string'],
        ];
    }
}
