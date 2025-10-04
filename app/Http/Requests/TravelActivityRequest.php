<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelActivityRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'activity_name' => 'required|string|max:255',
            'information' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'amount' => 'nullable|numeric',
        ];
    }
}
