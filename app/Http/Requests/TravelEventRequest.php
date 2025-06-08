<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelEventRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'naziv' => 'required|string|max:255',
            'vidovi' => 'required|string|max:255',
            'detali' => 'nullable|string|max:255',
            'pochetendatum' => 'required|date',
            'kraendatum' => 'required|date|after_or_equal:pochetendatum',
        ];
    }
}
