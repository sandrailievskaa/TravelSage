<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelEventRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'event_name' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'details' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ];
    }
}
