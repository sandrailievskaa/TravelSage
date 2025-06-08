<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelActivityRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'imeaktivnost' => 'required|string|max:255',
            'informacii' => 'nullable|string|max:255',
            'kategorija' => 'required|string|max:255',
            'iznos' => 'nullable|numeric',
        ];
    }
}
